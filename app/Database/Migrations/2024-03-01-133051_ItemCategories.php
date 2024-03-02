<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ItemCategories extends Migration
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
            'id_cats' => [
                'type'          => 'INT',
                'constraint'    => 100
            ],
            'item_name' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            'status' => [
                'type'       => 'ENUM("enable", "disable")',
                'default' => 'enable',
            ],
            'slug' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            'image' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            'description' => [
                'type'          => 'TEXT',
            ],
            'vendor' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('items'); 
    }

    public function down()
    {
        $this->forge->dropTable('items');
    }
}
