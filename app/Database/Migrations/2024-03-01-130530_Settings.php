<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Settings extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 50,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'site_name' => [
                'type'       => 'VARCHAR',
                'constraint'     => 100
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('settings');
        
        $initialData = [
            ['site_name'     => 'Web Topup'],
        ];

        // insert to tables
        $this->db->table('settings')->insertBatch($initialData);

    }

    public function down()
    {
        $this->forge->dropTable('settings');
    }
}
