<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddStatusToTables extends Migration
{
    public function up()
    {
        // Adds Status fields to tables
        $fields = [
        'status' => ['type' => 'VARCHAR', 'constraint' => 200, 'null' => false, 'default' => 'active'],
        ];
        $this->forge->addColumn('skills', $fields);

        $fields = [
        'status' => ['type' => 'VARCHAR', 'constraint' => 200, 'null' => false, 'default' => 'active'],
        ];
        $this->forge->addColumn('education', $fields);

        $fields = [
        'status' => ['type' => 'VARCHAR', 'constraint' => 200, 'null' => false, 'default' => 'active'],
        ];
        $this->forge->addColumn('experience', $fields);
    }

    public function down()
    {
        //
        $this->forge->dropColumn('skills', 'status');
        $this->forge->dropColumn('education', 'status');
        $this->forge->dropColumn('experience', 'status');
    }
}
