<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Permission extends Migration
{
    public function up()
    {

        $this->forge->addField([
            'pid' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_status' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                // 'null'       => true,
            ],
            'menu' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
                'null'       => true,
            ],
            'menu_status' => [
                'type' => 'BOOLEAN',
                'default' => false,
            ],
            
          
            
            
            ]);
        $this->forge->addKey('pid', true);
        $this->forge->createTable('permission');
    }

    public function down()
    {
        $this->forge->dropTable('permission');
    }
}


