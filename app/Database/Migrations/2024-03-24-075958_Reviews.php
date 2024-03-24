<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Reviews extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_revs' => [
                'type'           => 'INT',
                'constraint'     => 50,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null'  => true,
            ],
            'review' => [
                'type'       => 'TEXT',
                'null'  => true,
            ],
            'number_wa'  => [
                'type'       => 'VARCHAR',
                'constraint'     => 100,
                'null'  => true,
            ],
            'rating'  => [
                'type'       => 'INT',
                'constraint'     => 5,
                'null'  => true,
            ],
        ]);
        $this->forge->addKey('id_revs', true);
        $this->forge->createTable('reviews');
    }

    public function down()
    {
        $this->forge->dropTable('reviews');
    }
}
