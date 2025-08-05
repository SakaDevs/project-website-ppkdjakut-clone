<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Lowongan extends Migration
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
            'judul_lowongan' => [ // Mengganti 'judul' menjadi 'judul_lowongan' agar lebih spesifik
                'type'       => 'VARCHAR',
                'constraint' => '255', // Constraint lebih besar untuk judul yang mungkin panjang
                'null'       => false, // Judul tidak boleh kosong
            ],
            'nama_perusahaan' => [ // Menambahkan field untuk nama perusahaan
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'gambar_poster' => [ // Mengganti 'thumbnail' menjadi 'gambar_poster' agar lebih deskriptif
                'type' => 'VARCHAR', // Menggunakan VARCHAR untuk URL gambar
                'constraint' => '255', // Cukup untuk menyimpan URL
                'null' => true, // Gambar bisa saja opsional
            ],
            'deskripsi_singkat' => [ // Menambahkan deskripsi singkat jika ada
                'type' => 'TEXT',
                'null' => true,
            ],
            'detail_lengkap' => [ // Mengganti 'details' menjadi 'detail_lengkap'
                'type' => 'TEXT',
                'null' => true,
            ],
            'created_at' => [ // Timestamp otomatis untuk kapan data dibuat
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [ // Timestamp otomatis untuk kapan data terakhir diperbarui
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true); // Primary key
        $this->forge->createTable('lowongans');
    }

    public function down()
    {
        $this->forge->dropTable('lowongans'); 
    }
}
