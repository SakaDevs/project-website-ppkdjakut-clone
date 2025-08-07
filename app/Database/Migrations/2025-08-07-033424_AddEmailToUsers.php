<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddEmailToUsers extends Migration
{
    public function up()
    {
        $fields = [
            'email' => [
                'type' => 'TEXT',
                'null' => true,
                'after' => 'avatar'
            ],
        ];
        $this->forge->addColumn('users',$fields);
    }

     public function down()
    {
        $this->forge->dropColumn('users', ['email']);
    }
}
