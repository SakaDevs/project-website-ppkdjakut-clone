<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DaftarReguler extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_lengkap' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null'=> true,
            ],
            'nomor_induk_kepundudukan' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ],
            'nomor_kartu_keluarga' => [
                'type' => 'VARCHAR',
                'null' => true,
                'constraint' => 255
            ],
            'tempat_lahir' => [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ],
            'tanggal_lahir' => [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ],
            'jns_kelamin' => [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ],
            'nomor' => [
                'type'=> 'INT',
                'constraint' => 20,
                'null'=> true,
            ],
            'pendidikan_terakhir' => [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ],
            'tahun_lulus' => [
                'type'=> 'INT',
                'constraint' => 255,
                'null'=> true,
            ],
            'pekerjaan' => [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ],
            'email' => [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ],
            'minat_pelatihan' => [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ],
            'nama_jalan' => [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ]
            ,
            'rt' => [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ],
            'rw' => [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ],
            'kelurahan' => [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ],
            'kecamatan' => [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ],
            'kota' => [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ],
            'provinsi' => [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ],
            'ukuran' => [
                'type'=> 'INT',
                'constraint' => 255,
                'null'=> true,
            ],
            'pas_foto' => [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ],
            'scan_ktp' => [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ],
            'scan_kk' => [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ],
            'scan_ijazah' => [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ],
            'kebetuhan_khusus' => [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('regulerDaftar');
    }

    public function down()
    {
        $this->forge->dropTable('regulerDaftar');
    }
}
