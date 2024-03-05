<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Invoices extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 50,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_buyer' => [
                'type'       => 'INT',
                'constraint'     => 100
            ],
            'id_player' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255
            ],
            'server' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255
            ],
            'hash_transaction' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255
            ],
            'category' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255
            ],
            'service' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255
            ],
            'methods_pay' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255
            ],
            'price' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255
            ],
            'order_status' => [
                'type'       => 'ENUM("pending", "success", "failed")',
                'default' => 'pending',
            ],
            'sku_code' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('invoices');
    }

    public function down()
    {
        $this->forge->dropTable('invoices');
    }
}
