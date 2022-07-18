<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Employee extends Migration
{
    public function up()
    {
 
        $this->forge->addField([
            'uid' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'fullname' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
                'null'       => true,
            ],  
            'tel' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
                'null'       => true,
            ],
            'system_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => true,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => true,
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => true,
            ],
            'role_id' => [
                'type'       => 'INT',
                'constraint' => '1',
                'null'       => true,
            ],
            'status' => [
                'type'       => 'INT',
                'constraint' => '1',
                'null'       => true,
            ],
            'last_update' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'image_url' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
                'null'       => true,
            ],
            ]);
        $this->forge->addKey('uid', true);
        $this->forge->createTable('employee');
    }

    public function down()
    {
        $this->forge->dropTable('employee');
    }
}
