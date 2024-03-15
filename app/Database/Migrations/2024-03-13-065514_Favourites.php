<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Favourites extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_fav' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'section' => [
                'type'  => 'INT',
                'constraint'    => 100,
                'null' => true,
            ],
            'image_fav' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_fav', true);
        $this->forge->createTable('favourites');
    }

    public function down()
    {
        $this->forge->dropTable('favourites');
    }
}
