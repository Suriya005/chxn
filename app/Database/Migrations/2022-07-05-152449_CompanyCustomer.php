<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CompanyCustomer extends Migration
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
            'customer_id' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',

            ],
            'customer_type' => [
                'type'       => 'ENUM',
                'constraint' => ['personal', 'company'],
                
            ], 
            'fullname' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => true,

            ], 
            'birthday' => [
                'type'       => 'date',
                'null' => true,
            ],  
            'age' => [
                'type'           => 'INT',
                'constraint'     => 3,
                'null' => true,
            ], 
            'gender' => [
                'type'       => 'ENUM',
                'constraint' => ['Male', 'female','lgbtl'],
                'null' => true,
     
            ], 
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => true,

            ], 
            'tel' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
                'null' => true,
   
            ], 
            'line_id' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'null' => true,
    
            ], 
            'id_card_number' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
                'null' => true,
  
            ], 
            'company_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
  
            ], 
            'company_registation_id' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => true,

            ], 
            'company_branch_id' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => true,

            ], 
            'address' => [
                'type'       => 'text',
            ],
            'district' => [
                'type'       => 'INT',
                'constraint'     => 5,
            ], 
            'sub_district' => [
                'type'       => 'INT',
                'constraint'     => 5,
            ], 
            'province' => [
                'type'       => 'text',
            ],    
            'poscode' => [
                'type'       => 'INT',
                'constraint'     => 5,
            ],  
            'additional' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],  
            'address_deliver_product' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],  
               
        ]);
        $this->forge->addKey('uid', true);
        $this->forge->createTable('company_customer');
    }

    public function down()
    {
        $this->forge->dropTable('company_customer');
    }
}
