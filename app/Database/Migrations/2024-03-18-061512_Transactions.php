<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transactions extends Migration
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
            'reference' => [
                'type'  => 'VARCHAR',
                'constraint' => 255,
                'null'  => true,
            ],
            'merchant_ref'  => [
                'type'  => 'VARCHAR',
                'constraint' => 255,
                'null'  => true,
            ],
            'payment_method'  => [
                'type'  => 'VARCHAR',
                'constraint' => 255,
                'null'  => true,
            ],
            'payment_method_code'  => [
                'type'  => 'VARCHAR',
                'constraint' => 50,
                'null'  => true,
            ],
            'total_amount'  => [
                'type'  => 'INT',
                'constraint' => 11,
                'null'  => true,
            ],
            'fee_merchant'  => [
                'type'  => 'INT',
                'constraint' => 11,
                'null'  => true,
            ],
            'fee_customer'  => [
                'type'  => 'INT',
                'constraint' => 11,
                'null'  => true,
            ],
            'total_fee'  => [
                'type'  => 'INT',
                'constraint' => 11,
                'null'  => true,
            ],
            'amount_received'  => [
                'type'  => 'INT',
                'constraint' => 11,
                'null'  => true,
            ],
            'is_closed_payment'  => [
                'type'  => 'TINYINT',
                'constraint' => 1,
                'null'  => true,
            ],
            'status'  => [
                'type'  => 'VARCHAR',
                'constraint' => 50,
                'null'  => true,
            ],
            'paid_at'  => [
                'type'  => 'BIGINT',
                'constraint' => 20,
                'null'  => true,
            ],
            'note'  => [
                'type'  => 'TEXT',
                'null'  => true,
            ],
            'created_at'  => [
                'type'  => 'BIGINT',
                'null'  => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('transactions');
    }

    public function down()
    {
        $this->forge->dropTable('transactions');
    }
}
