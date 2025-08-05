<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mtudaftar extends Migration
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
            'nomor' => [
                'type'=> 'INT',
                'constraint' => 20,
                'null'=> true,
            ],
            'maps' => [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ],
            'minat_pelatihan' => [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ],
            'surat_permohonan' => [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('mtuDaftar');
    }

    public function down()
    {
        $this->forge->dropTable('mtuDaftar');
    }
}
