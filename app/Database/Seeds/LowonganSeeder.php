<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LowonganSeeder extends Seeder
{
    private const ROWS = [ 
        [
            'judul_lowongan' => 'Chief Engineering',
            'nama_perusahaan' => 'Hariston Hotel & Suites',
            'gambar_poster' => 'https://ppkdju.com/media/jobs/WhatsApp_Image_2025-06-30_at_09.24.04.jpeg',
            'deskripsi_singkat' => 'Requirements : 1. Minimum 2 (two) years experience in the same position within hospitality industry 2. Team player with outstanding attitude and good appearance 3. Attractive development opportunities are offered',
            'detail_lengkap' => 'Requirements : 1. Minimum 2 (two) years experience in the same position within hospitality industry. 2. Team player with outstanding attitude and good appearance. 3. Attractive development opportunities are offered. Join our team!',   
            'created_at' => NULL, // Mengisi created_at
            'updated_at' => null, // Mengisi updated_at
        ],
        // Anda bisa menambahkan baris data lain di sini
    ];

    public function run()
    {
        // Mengakses konstanta menggunakan self::
        $this->db->table('lowongans')->insertBatch(self::ROWS);
    }
}
