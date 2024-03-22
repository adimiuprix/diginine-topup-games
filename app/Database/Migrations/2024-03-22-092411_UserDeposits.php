<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserDeposits extends Migration
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
            'user_id' => [
                'type'          => 'INT',
                'constraint'    => 10,
                'null' => true,
            ],
            'amount' => [
                'type'          => 'DECIMAL',
                'constraint'    => '10,2',
                'null' => true,
            ],
            'method' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
                'null' => true,
            ],
            'hash_id' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
                'null' => true,
            ],
            'reference' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
                'null' => true,
            ],
            'create_at DATETIME DEFAULT CURRENT_TIMESTAMP',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('user_deposits');
    }

    public function down()
    {
        $this->forge->dropTable('user_deposits');
    }
}
