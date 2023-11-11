<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdateCutiTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'           => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'pegawai_id'   => ['type' => 'INT', 'unsigned' => true],
            'alasan_cuti'  => ['type' => 'TEXT'],
            'tanggal_mulai'=> ['type' => 'DATE'],
            'tanggal_selesai' => ['type' => 'DATE'],
        ]);

        $this->forge->addKey('id', true);
        
        $this->forge->addForeignKey('pegawai_id', 'pegawai', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('cuti');
    }

    public function down()
    {
        $this->forge->dropTable('cuti');
    }
}
