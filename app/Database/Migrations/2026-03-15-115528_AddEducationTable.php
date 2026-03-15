<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddEducationTable extends Migration
{
    public function up()
    {
        // Add Education Table
         $this->forge->addField([
            'id'    => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'level'  => ['type' => 'VARCHAR', 'constraint' => '100'],
            'school'  => ['type' => 'VARCHAR', 'constraint' => '100'],
            'year'  => ['type' => 'VARCHAR', 'constraint' => '100'],
            'order'  => ['type' => 'INT'],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('education');
    }

    public function down()
    {
        //
    }
}
