<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MasterProduct extends Migration
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
            'parent_id' => [
                'type'       => 'JSON',
            ],
            'master_type' => [
                'type'       => 'ENUM',
                'constraint' => ['item_product_type', 'item_collection_type','item_product_size','metal_color','metal_name','gem_group','gem_name','gem_shape','gem_color','gem_clarity','gem_cutting','gem_quality','gem_size','other_inventory','other_general'], 
                'null' => true,
            ], 
            'master_code' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ], 
            'master_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ], 
            'master_detail' => [
                'type'       => 'text',
                'null' => true,
            ], 
          
            
            
            ]);
        $this->forge->addKey('uid', true);
        $this->forge->createTable('master_product');
    }

    public function down()
    {
        $this->forge->dropTable('master_product');
    }
}
