<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LowonganDaftar extends Migration
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
            'nama_lowongan' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null'=> true,
            ],
            'nama_lengkap' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null'=> true,
            ],
            'nomor_ktp' => [
                'type'=> 'INT',
                'constraint' => 20,
                'null'=> true,
            ],
            'nomor_hp' => [
                'type'=> 'INT',
                'constraint' => 20,
                'null'=> true,
            ],
            'cv' => [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ],
            'surat_permohonan' => [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ],
            'sertifikat`' => [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('lowongandaftar');
    }

    public function down()
    {
        $this->forge->dropTable('lowongandaftar');
    }
}
