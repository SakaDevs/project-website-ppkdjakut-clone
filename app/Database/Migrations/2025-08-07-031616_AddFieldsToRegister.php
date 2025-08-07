<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddFieldsToRegister extends Migration
{
    public function up()
    {
        $fields = [
            'kabupaten' => [
                'type' => 'TEXT',
                'null' => true,
                'after' => 'phone_number'
            ],
            'provinsi' => [
                'type' => 'TEXT',
                'null' => true,
                'after' => 'kabupaten'
            ]
        ];
        $this->forge->addColumn('users',$fields);
    }

     public function down()
    {
        $this->forge->dropColumn('users', ['provinsi', 'kabupaten']);
    }
}
