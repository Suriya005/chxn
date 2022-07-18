<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bookinfo extends Migration
{
    public function up()
    {
        // $this->forge->addField([
        //     'uid' => [
        //         'type'           => 'INT',
        //         'constraint'     => 5,
        //         'unsigned'       => true,
        //         'auto_increment' => true,
        //     ],
        //     'booktype' => [
        //         'type'       => 'JSON',
        //     ],
            
               
        // ]);
        $this->forge->addField([
            'uid' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'book_info' => [
                'type'       => 'JSON',
            ]
          
            
            
            ]);
        $this->forge->addKey('uid', true);
        $this->forge->createTable('book_info');
    }

    public function down()
    {
        $this->forge->dropTable('book_info');
    }
}
