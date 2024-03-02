<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PaymentMethods extends Migration
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
            'method_name' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('payment_methods');
        
        $initialData = [
            ['method_name'     => 'Qris'],
            ['method_name'     => 'Dana'],
            ['method_name'     => 'Gopay'],
            ['method_name'     => 'Ovo'],
            ['method_name'     => 'Virtual Bank'],
            ['method_name'     => 'Manual'],
        ];

        // insert to tables
        $this->db->table('payment_methods')->insertBatch($initialData);
    }

    public function down()
    {
        $this->forge->dropTable('payment_methods');
    }
}
