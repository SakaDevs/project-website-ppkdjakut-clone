<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddFields2Users extends Migration
{
    public function up()
    {
        $fields = [
            'kecamatan' => [
                'type' => 'TEXT',
                'null' => true,
                'after' => 'provinsi'
            ],
            'kelurahan' => [
                'type' => 'TEXT',
                'null' => true,
                'after' => 'kecamatan'
            ],
            'gender' => [
                'type' => 'TEXT',
                'null' => true,
                'after' => 'full_name'
            ],
        ];
        $this->forge->addColumn('users',$fields);
    }

     public function down()
    {
        $this->forge->dropColumn('users', ['kecamatan','kelurahan','gender']);
    }
}
