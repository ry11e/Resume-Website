<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateResumeTables extends Migration
{
    public function up()
    {
        // Skills Table
        $this->forge->addField([
            'id'    => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'name'  => ['type' => 'VARCHAR', 'constraint' => '100'],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('skills');

        // Experience Table
        $this->forge->addField([
            'id'      => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'year'    => ['type' => 'VARCHAR', 'constraint' => '50'],
            'company' => ['type' => 'VARCHAR', 'constraint' => '100'],
            'desc'    => ['type' => 'TEXT'],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('experience');
    }

    public function down()
    {
        //
    }
}
