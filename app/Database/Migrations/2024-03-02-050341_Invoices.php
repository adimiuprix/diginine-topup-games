<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Invoices extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_invoice' => [
                'type'           => 'INT',
                'constraint'     => 50,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_buyer' => [
                'type'       => 'INT',
                'constraint'     => 100,
                'null' => true,
            ],
            'id_player' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255,
                'null' => true,
            ],
            'server' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255,
                'null' => true,
            ],
            'hash_transaction' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255,
                'null' => true,
            ],
            'category' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255,
                'null' => true,
            ],
            'service' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255,
                'null' => true,
            ],
            'methods_pay' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255,
                'null' => true,
            ],
            'price' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255,
                'null' => true,
            ],
            'order_status' => [
                'type'       => 'ENUM("pending", "success", "failed")',
                'default' => 'pending',
            ],
            'sku_code' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255,
                'null' => true,
            ],
            'login_via' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255,
                'null' => true,
            ],
            'uid_nickname' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255,
                'null' => true,
            ],
            'account_detail' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255,
                'null' => true,
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255,
                'null' => true,
            ],
            'req_heroword' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255,
                'null' => true,
            ],
            'notice' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255,
                'null' => true,
            ],
            'user_id' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255,
                'null' => true,
            ],
            'server' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255,
                'null' => true,
            ],
            'nick_user_ig' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255,
                'null' => true,
            ],
            'comentary' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255,
                'null' => true,
            ],
            'gift_skin' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255,
                'null' => true,
            ],
            'hour_tournament' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255,
                'null' => true,
            ],
            'date_tournament' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255,
                'null' => true,
            ],
    
            'create_at DATETIME DEFAULT CURRENT_TIMESTAMP',
        ]);
        $this->forge->addKey('id_invoice', true);
        $this->forge->createTable('invoices');
    }

    public function down()
    {
        $this->forge->dropTable('invoices');
    }
}
