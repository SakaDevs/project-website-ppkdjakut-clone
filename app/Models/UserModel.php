<?php

namespace App\Models;

// GANTI use CodeIgniter\Model; DENGAN INI:
use CodeIgniter\Shield\Models\UserModel as ShieldUserModel;

// HAPUS SEMUA 'use' DARI MYTH:AUTH

class UserModel extends ShieldUserModel // PASTIKAN EXTENDS KE ShieldUserModel
{
    protected function initialize(): void
    {
        parent::initialize();

        // Di sini Anda bisa menambahkan kolom-kolom custom dari tabel 'users' Anda
        // ke dalam $allowedFields.
        $this->allowedFields = [
            ...$this->allowedFields, // Mengambil semua field default dari Shield
            'full_name',
            'phone_number',
            'user_image',
            'first_name', // Anda punya kolom ini di database
            'last_name',  // Anda punya kolom ini di database
            'avatar',     // Anda punya kolom ini di database
        ];
    }
}
