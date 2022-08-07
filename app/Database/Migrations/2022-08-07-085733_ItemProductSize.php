<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ItemProductSize extends Migration
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
            'master_code' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
                'null'       => true,
            ],
            'master_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
                'null'       => true,
            ],
            'master_detail' => [
                'type' => 'text',
                'default' => false,
            ],

            ]);
        $this->forge->addKey('uid', true);
        $this->forge->createTable('item_product_size');
    }

    public function down()
    {
        $this->forge->dropTable('item_product_size');
    }
}



