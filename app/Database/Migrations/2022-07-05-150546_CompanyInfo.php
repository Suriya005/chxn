<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CompanyInfo extends Migration
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
            'company_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
           
            ], 
            'company_register_id' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
               
            ], 
            'line_id' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],  
            'company_register_address' => [
                'type'       => 'text',
            ], 
            'district' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ], 
            'sub_district' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ], 
            'province' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ], 
            'poscode' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ], 
            'image_logo' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'namecontrac' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ], 
            'tel' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'lindid' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
               
        ]);
        $this->forge->addKey('uid', true);
        $this->forge->createTable('company_info');
    }

    public function down()
    {
        $this->forge->dropTable('company_info');
    }
}
