<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admins extends Migration
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
            'username' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null' => true,
            ],
            'email' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null' => true,
            ],
            'password' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('admins');

        $initialData = [
            [
                'username'      => 'Admin',
                'email'         => 'admin@gmail.com',
                'password'      => '$2a$12$BorsC1kTMVVtA37Q901Z.Omc4/Fyng90bcbuIOpo9.6uX1OImMe6y',  // this password is "admin"
            ],
        ];

        // insert to tables
        $this->db->table('admins')->insertBatch($initialData);
    }

    public function down()
    {
        $this->forge->dropTable('admins');
    }
}
