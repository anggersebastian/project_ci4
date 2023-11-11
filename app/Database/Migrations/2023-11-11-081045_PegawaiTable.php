<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PegawaiTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'first_name' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'last_name' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'phone_number' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
            ],
            'address' => [
                'type' => 'TEXT',
            ],
            'gender' => [
                'type' => 'ENUM("Laki-laki", "Perempuan")',
                'default' => 'Laki-laki',
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('pegawai');
    }

    public function down()
    {
        $this->forge->dropTable('pegawai');
    }
}
