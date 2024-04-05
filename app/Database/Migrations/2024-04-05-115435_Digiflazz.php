<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Digiflazz extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 100,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255
            ],
            'api_key' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('digiflazzs');
    }

    public function down()
    {
        $this->forge->dropTable('digiflazzs');
    }
}
