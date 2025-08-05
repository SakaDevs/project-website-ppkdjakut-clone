<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Regular extends Migration
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
            'nama_pelatihan' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null'=> true,
            ],
            'jenis_pelatihan' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ],
            'total_hari' => [
                'type' => 'VARCHAR',
                'null' => true,
                'constraint' => 255
            ],
            'pembukaan' => [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ],
            'total_peserta' => [
                'type'=> 'VARCHAR',
                'constraint' => 255,
                'null'=> true,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('reguler');
    }

    public function down()
    {
        $this->forge->dropTable('reguler');
    }
}
