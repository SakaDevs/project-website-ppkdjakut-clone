<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JadwalSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nama_program' => 'PERAWATAN KECANTIKAN / TATA RIAS',
            'angkatan' => 'III',
            'tutup_pendaftaran' => '15 Aug 2025',
            'mulai_seleksi' => '18 Aug 2025',
            'akhir_seleksi'=> '21 Aug 2025',
            'mulai_pelatihan'=> '25 Aug 2025',
            'akhir_pelatihan'=> '27 Oct 2025',
            'awal_kompetensi'=> '28 Oct 2025',
            'akhir_kompetensi'=> '29 Oct 2025',
        ] ;
        $this ->db->table   ('jadwal')->insert($data);
    }
}
