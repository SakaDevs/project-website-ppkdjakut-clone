<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var list<string>
     */
    public $ruleSets = [
        \CodeIgniter\Validation\Rules::class,
        \CodeIgniter\Validation\FormatRules::class,
        \CodeIgniter\Validation\FileRules::class,
        \CodeIgniter\Validation\CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------
    public $register = [
        'email' => [
            'label' => 'Email',
            'rules' => 'required|valid_email|is_unique[users.email]',
            'errors' => [
                'required' => '{field} wajib diisi.',
                'valid_email' => 'Format {field} tidak valid.',
                'is_unique' => '{field} sudah terdaftar.',
            ],
        ],
        'full_name' => [
            'label' => 'Nama Lengkap',
            'rules' => 'required|min_length[3]|max_length[50]',
        ],
        'username' => [
            'label' => 'Nama Pengguna',
            'rules' => 'required|alpha_numeric|min_length[4]|is_unique[users.username]',
        ],
        'password' => [
            'label' => 'Kata Sandi',
            'rules' => 'required|min_length[6]',
        ],
        'password_confirm' => [
            'label' => 'Kata Sandi (lagi)',
            'rules' => 'required|matches[password]',
            'errors' => [
                'matches' => 'Kata sandi tidak sama!',
            ]
        ],
        'phone_number' => [
            'label' => 'Nomor Telepon',
            'rules' => 'required|numeric|min_length[8]|max_length[15]',
            'errors' => [
                'numeric' => '{field} hanya boleh angka.',
                'min_length' => '{field} terlalu pendek.',
                'max_length' => '{field} terlalu panjang.',
            ],
        ],
    ];
    
}
