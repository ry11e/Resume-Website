<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddExistingUsersTable extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'first_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'last_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'middle_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'email_address' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'birthdate' => [
                'type'       => 'DATE',
            ],
            'address' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'created_at' => [
                'type'       => 'DATE',
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            // ... add the rest of your existing columns here
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('your_table_name', true); // The "true" here is the secret!
        
    }

    public function down()
    {
        //
    }
}
