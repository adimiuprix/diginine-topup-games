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
                'constraint'    => 100,
                'null' => true,
            ],
            'item_name' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null' => true,
            ],
            'status' => [
                'type'       => 'ENUM("enable", "disable")',
                'default' => 'enable',
                'null' => true,
            ],
            'slug' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null' => true,
            ],
            'image' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null' => true,
            ],
            'blog_image' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null' => true,
            ],
            'breadcrumb' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null' => true,
            ],
            'description' => [
                'type'          => 'TEXT',
                'null' => true,
            ],
            'vendor' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null' => true,
            ],
            'coloum' => [
                'type'       => 'ENUM("1", "2")',
                'default' => '1',
                'null' => true,
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
