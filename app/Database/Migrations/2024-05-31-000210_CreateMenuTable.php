<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMenuTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'menu' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'price' => [
                'type'=> 'INT',
                'null' => true,
            ],
            'category' => [
                'type' => 'ENUM',
                'constraint' => ['Burgers', 'Hot Snacks', 'Beverages'],
                'default' => 'Burgers',
            ],
            'photo' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('menu', true);
    }

    public function down()
    {
        $this->forge->dropTable('menu');
    }
}
