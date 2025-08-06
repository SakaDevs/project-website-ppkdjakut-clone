<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserShieldModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Shield\Models\UserModel;
use CodeIgniter\Shield\Models\UsersChangeModel;
use SebastianBergmann\CodeUnit\FunctionUnit;
use Config\Pager;

class Admin extends BaseController
{
        public function users()
        {
            $userModel = new UserShieldModel();
            $userModel->select("
                users.id as userid,
                users.username,
                users.first_name,
                auth_groups_users.group
            ");
            $userModel->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
            $userModel->join('auth_identities', 'auth_identities.user_id = users.id');
            $userModel->where('auth_groups_users.group !=', 'superadmin');
            $userModel
            ->groupStart()
                ->where('auth_identities.type', 'email_password')
                ->orWhere('auth_identities.type', 'facebook')
            ->groupEnd();

            $data = [
                'users' => $userModel->paginate(10),
                'pager' => $userModel->pager,
            ]; 
            return view('users', $data);
        }

       public function change($id)
        {
            if ($id == user_id()) {
                return redirect()->back()->with('error', 'tidak bisa mengubah akun diri sendiri');
            }
            $role = $this->request->getPost('role');
            $db = \Config\Database::connect();
            $group = $db->table('auth_groups_users')->where('group', $role)->get()->getRow();

            if (empty($group)) {
                return redirect('users')->with('error', 'Role tidak ditemukan');
            }
            $db->table('auth_groups_users')->where('user_id', $id)->delete();

            $db->table('auth_groups_users')->insert([
                'user_id' => $id,
                'group'   => $role,
            ]);

            return redirect('users')->with('success', 'Role berhasil diubah');
        }

        public function search(): string
        {
            $keyword = $this->request->getGet('keyword');

            $userModel = new UserShieldModel();

            $userModel->select("
                users.id as userid,
                users.username,
                users.first_name,
                auth_groups_users.group
            ");
            $userModel->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
            $userModel->join('auth_identities', 'auth_identities.user_id = users.id');
            $userModel->where('auth_groups_users.group !=', 'superadmin');
            $userModel
            ->groupStart()
                ->where('auth_identities.type', 'email_password')
                ->orWhere('auth_identities.type', 'facebook')
            ->groupEnd();

            
            if (!empty($keyword)) {
                $userModel->groupStart()
                    ->like('users.username', $keyword)
                    ->orLike('auth_groups_users.group', $keyword)
                    ->orLike('users.full_name', $keyword)
                    ->groupEnd();
            }

            // Ambil semua data hasil query
            $data = [
                'users' => $userModel->paginate(10),
                'pager' => $userModel->pager,
            ];

            return view('users', $data);
        }



      public function edit($id)
        {
            $users = new UserModel();
            $detail = $users->where('id', $id)->first();
            if ($id != user_id()) {
                return redirect()->to('/')->with('error', 'Akses ditolak!');
            }
            
            return view('users_profile_edit', compact('detail')); 
        }
}
