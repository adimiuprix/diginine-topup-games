<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Categories extends Migration
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
            'category' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('categories');

        $initialData = [
            ['category'     => 'Game'],
            ['category'     => 'Joki'],
            ['category'     => 'Voucher'],
            ['category'     => 'Pulsa'],
            ['category'     => 'E-wallet'],
            ['category'     => 'Entertaiment'],
        ];

        // insert to tables
        $this->db->table('categories')->insertBatch($initialData);
    }

    public function down()
    {
        $this->forge->dropTable('categories');
    }
}
