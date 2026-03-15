<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddDescriptionToSkills extends Migration
{
    public function up()
    {
        // Add New Coloum "description" to skills table
        $fields = [
        'desc' => ['type' => 'VARCHAR', 'constraint' => 200, 'null' => true],
    ];
    $this->forge->addColumn('skills', $fields);
    }

    public function down()
    {
        //
    }
}
