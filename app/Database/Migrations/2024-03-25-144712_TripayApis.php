<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TripayApis extends Migration
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
            'api_key' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null' => true,
            ],
            'private_key' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tripay_apis');
    }

    public function down()
    {
        $this->forge->dropTable('tripay_apis');
    }
}
