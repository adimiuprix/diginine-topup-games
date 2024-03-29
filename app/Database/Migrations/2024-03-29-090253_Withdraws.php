<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Withdraws extends Migration
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
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null' => true,
            ],
            'amount' => [
                'type'          => 'DECIMAL',
                'constraint'    => '10,2',
                'null' => true,
                'default' => 0.00,
            ],
            'bank_to' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null' => true,
            ],
            'hash' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null' => true,
            ],
            'withdraw_status' => [
                'type'       => 'ENUM("pending", "success", "failed")',
                'default' => 'pending',
            ],
            'create_at DATETIME DEFAULT CURRENT_TIMESTAMP',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('withdraws');
    }

    public function down()
    {
        $this->forge->dropTable('withdraws');
    }
}
