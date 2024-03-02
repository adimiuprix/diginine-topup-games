<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Products extends Migration
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
            'id_item' => [
                'type'       => 'INT',
                'constraint'     => 50,
                'null' => true,
            ],
            'name_product' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null' => true,
            ],
            'code_product' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null' => true,
            ],
            'price' => [
                'type'          => 'DECIMAL',
                'constraint'    => '10,2',
                'null' => true,
                'default' => 0.00,
            ],
            'item' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('products');    
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}
