<?php

declare(strict_types=1);

namespace App\Libraries\ShieldOAuth;

use Datamweb\ShieldOAuth\Libraries\Basic\AbstractOAuth;

class FacebookOAuth extends AbstractOAuth
{
    /** API URL Facebook */
    private static $API_CODE_URL = 'https://www.facebook.com/v15.0/dialog/oauth';
    private static $API_TOKEN_URL = 'https://graph.facebook.com/v15.0/oauth/access_token';
    private static $API_USER_INFO_URL = 'https://graph.facebook.com/me?fields=id,name,email';

    protected string $token;
    protected string $client_id;
    protected string $client_secret;
    protected string $callback_url;

    public function __construct(string $token = '')
    {
        $config = config('ShieldOAuthConfig');
    $fbConfig = $config->oauthConfigs['facebook'];

    $this->client_id     = $fbConfig['client_id'];
    $this->client_secret = $fbConfig['client_secret'];
    $this->callback_url  = base_url('oauth/facebook/callback');
    $this->token         = $token;
    }

    /**
     * Redirect user ke Facebook untuk login
     */
    public function makeGoLink(string $state): string
    {
        return self::$API_CODE_URL . '?' . http_build_query([
            'client_id'     => $this->client_id,
            'redirect_uri'  => $this->callback_url,
            'state'         => $state,
            'response_type' => 'code',
            'scope'         => 'email'
        ]);
    }

    /**
     * Tukar auth code dengan access token
     */
    public function fetchAccessTokenWithAuthCode(array $allGet): void
    {
        if (!isset($allGet['code'])) {
            throw new \RuntimeException('Authorization code not found.');
        }

        $response = file_get_contents(self::$API_TOKEN_URL . '?' . http_build_query([
            'client_id'     => $this->client_id,
            'client_secret' => $this->client_secret,
            'redirect_uri'  => $this->callback_url,
            'code'          => $allGet['code'],
        ]));

        $data = json_decode($response, true);
        if (isset($data['access_token'])) {
            $this->token = $data['access_token'];
        } else {
            throw new \RuntimeException('Failed to get access token: ' . ($data['error']['message'] ?? 'Unknown error'));
        }
    }

    /**
     * Ambil data user dari Facebook
     */
    public function fetchUserInfoWithToken(): object
    {
        if (empty($this->token)) {
            throw new \RuntimeException('Access token not set.');
        }

        $response = file_get_contents(self::$API_USER_INFO_URL . '&access_token=' . $this->token);
        return json_decode($response);
    }

    /**
     * Mapping field Facebook ke tabel Shield
     */
    public function setColumnsName(string $nameOfProcess, object $userInfo): array
    {
        return [
            'username' => $userInfo->name ?? '',
            'email'    => $userInfo->email ?? '',
            'secret'   => $userInfo->id ?? '',
            'type'     => 'facebook',
        ];
    }
}
