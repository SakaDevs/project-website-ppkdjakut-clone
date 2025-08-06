<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Libraries\ShieldOAuth\FacebookOAuth;
use CodeIgniter\Shield\Entities\User;
use CodeIgniter\Shield\Models\UserModel;
use CodeIgniter\Shield\Models\UserIdentityModel;

class FacebookController extends BaseController
{
    protected $facebook;

    public function __construct()
    {
        $this->facebook = new FacebookOAuth();
    }

    public function redirect()
    {
        $state = csrf_hash();
        session()->set('oauth_state', $state);

        return redirect()->to($this->facebook->makeGoLink($state));
    }

    public function callback()
    {
        $stateFromFB    = $this->request->getGet('state');
        $stateInSession = session()->get('oauth_state');

        if ($stateFromFB !== $stateInSession) {
            return redirect()->to('/login')->with('error', 'Invalid state (kemungkinan CSRF).');
        }

        try {
            $this->facebook->fetchAccessTokenWithAuthCode($this->request->getGet());
            $userInfo   = $this->facebook->fetchUserInfoWithToken();
            $mappedUser = $this->facebook->setColumnsName('login', $userInfo);

            $users      = model(UserModel::class);
            $identities = model(UserIdentityModel::class);

            // cek apakah sudah ada identity facebook
            $identity = $identities
                ->where('type', $mappedUser['type'])
                ->where('secret', $mappedUser['secret'])
                ->first();

            if (! $identity) {
                // cek config allow_register
                $config   = config('ShieldOAuthConfig');
                $fbConfig = $config->oauthConfigs['facebook'] ?? [];

                if (! ($fbConfig['allow_register'] ?? false)) {
                    return redirect()->to('/login')
                        ->with('error', 'Registrasi via Facebook tidak diizinkan. Silakan gunakan akun yang sudah terdaftar.');
                }

                // Cegah duplicate username
                $baseUsername = $mappedUser['username'] ?: 'fbuser';
                $username     = $baseUsername;
                $counter      = 1;
                while ($users->where('username', $username)->first()) {
                    $username = $baseUsername . '_' . $counter++;
                }

                // Buat user baru
                $user = new User([
                    'username' => $username,
                    'active'   => 1,
                ]);

                $users->save($user);
                $userId = $users->getInsertID();
                $user   = $users->find($userId);

                // Insert identity
                $identities->insert([
                    'user_id' => $user->id,
                    'type'    => $mappedUser['type'],
                    'secret'  => $mappedUser['secret'],
                    'extra'   => json_encode([
                        'email' => $mappedUser['email'],
                        'name'  => $mappedUser['username'],
                    ]),
                ]);

                // assign ke group default "user"
                db_connect()->table('auth_groups_users')->insert([
                    'user_id' => $user->id,
                    'group'   => 'user',
                ]);
            } else {
                $user = $users->find($identity->user_id);
            }

            service('auth')->login($user);

            return redirect()->to('/')->with('message', 'Berhasil login via Facebook.');
        } catch (\Throwable $e) {
            return redirect()->to('/login')->with('error', 'Login Facebook gagal: ' . $e->getMessage());
        }
    }
}
