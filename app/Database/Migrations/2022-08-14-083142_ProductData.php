<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProductData extends Migration
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
            'stone_code' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],  
            'product_group' => [
                'type'       => 'INT',
                'constraint' => '5',
                'null' => true,
            ], 
            'product_name' => [
                'type'       => 'INT',
                'constraint' => '5',
                'null' => true,
            ],
            'product_shape' => [
                'type'       => 'INT',
                'constraint' => '5',
                'null' => true,
            ],
            'product_color' => [
                'type'       => 'INT',
                'constraint' => '5',
                'null' => true,
            ],
            'product_clarity' => [
                'type'       => 'INT',
                'constraint' => '5',
                'null' => true,
            ],
            'product_cutting' => [
                'type'       => 'INT',
                'constraint' => '5',
                'null' => true,
            ],
            'product_quality' => [
                'type'       => 'INT',
                'constraint' => '5',
                'null' => true,
            ],
            'product_description' => [
                'type'       => 'VARCHAR',
                'constraint' => '100', 
                'null' => true,
            ],
            'product_type' => [
                'type'  => 'ENUM',
                'constraint' => ['stone', 'jewelry'],
                'null' => true,
            ],
            'product_images' => [
                'type'       => 'JSON',
                'null' => true,
            ],
            'product_size' => [
                'type'       => 'JSON',
                'null' => true,
            ], 
          
            
            
            ]);
        $this->forge->addKey('uid', true);
        $this->forge->createTable('product_data');
    }

    public function down()
    {
        $this->forge->dropTable('product_data');
    }
}

