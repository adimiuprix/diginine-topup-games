<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

use function PHPSTORM_META\type;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null' => true,
            ],
            'email' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null' => true,
            ],
            'whatsapp_number' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null' => true,
            ],
            'password' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null' => true,
            ],
            'balance' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'default' => '0.00',
            ],
            'remember_token' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => true,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
