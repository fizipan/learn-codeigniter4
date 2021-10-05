<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        // Add field
        $this->forge->addField([
            'id' =>  [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'username' =>  [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'password' =>  [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
        ]);

        // Add primary key
        $this->forge->addPrimaryKey('id');

        // run / migrate migration to users table
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
