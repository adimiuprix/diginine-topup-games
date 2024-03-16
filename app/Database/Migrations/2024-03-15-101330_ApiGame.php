<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ApiGame extends Migration
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
            'merchant_id' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null' => true,
            ],
            'secret_key' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('api_games');
    }

    public function down()
    {
        $this->forge->dropTable('api_games');
    }
}

// M230429AERK1567DJ
// 1728ed0671737c37834f555ba154a025fa9294d76d945d76efd278ddc84483bd