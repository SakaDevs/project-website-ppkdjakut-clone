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
    public $registration = [
        'email' => [
            'label' => 'secret',
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
         'phone_number' => [
            'label' => 'Nomor Telepon',
            'rules' => 'required|regex_match[/^\+\d{1,3}\s\(\d{3}\)\s\d{3}-\d{4}$/]',
            'errors' => [
                'regex_match' => '{field} harus dalam format +1 (515) 711-7117.',
                'required'    => '{field} wajib diisi.',
            ],
        ],
        'kabupaten' => [
            'label' => 'kabupaten',
            'rules' => 'required'
        ],
        'provinsi' => [
            'label' => 'provinsi',
            'rules' => 'required'
        ],
        'kecamatan' => [
            'label' => 'kecamatan',
            'rules' => 'required'
        ],
        'kelurahan' => [
            'label' => 'kelurahan',
            'rules' => 'required'
        ],
        'gender' => [
            'label' => 'gender',
            'rules' => 'required'
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
       
    ];
    
}
