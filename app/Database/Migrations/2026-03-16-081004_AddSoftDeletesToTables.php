<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddSoftDeletesToTables extends Migration
{
    public function up()
    {
        // Add deleted_at

        $fields = [
            'deleted_at' => ['type'=> 'DATETIME', 'null' => true],   
        ];

        $this->forge->addColumn('experience', $fields);
        $this->forge->addColumn('education', $fields);
        $this->forge->addColumn('skills', $fields);
        $this->forge->addColumn('users', $fields);

    }

    public function down()
    {
        //
        
    }
}
