<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEmployeeTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'age' => [
                'type' => 'INT',
                'constraint' => 3,
            ],
            'gender' => [
                'type' => 'ENUM',
                'constraint' => ['Male', 'Female'],
            ],
            'marital_status' => [
                'type' => 'ENUM',
                'constraint' => ['Single', 'Married'],
            ],
            'work_schedule' => [
                'type' => 'ENUM',
                'constraint' => ['Full Time', 'Shift'],
            ],
            'position' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'photo' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('employees', true);
    }

    public function down()
    {
        $this->forge->dropTable('employees');
    }
}
