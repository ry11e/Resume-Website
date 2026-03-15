<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddLevelToSkills2 extends Migration
{
    public function up()
    {
        $fields = [
        'level' => ['type' => 'VARCHAR', 'constraint' => 200, 'null' => true],
        ];
        $this->forge->addColumn('skills', $fields);
    }

    public function down()
    {
        //
    }
}
