<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddGambar extends Migration
{
    public function up()
    {
        $fields = [
            'gambar' => [
                'type' => 'TEXT',
                'null' => true,
                'after' => 'total_peserta'
            ]
        ];
        $this->forge->addColumn('reguler',$fields);
    }

    public function down()
    {
            $this->forge->dropColumn('reguler', 'gambar');
    }
}
