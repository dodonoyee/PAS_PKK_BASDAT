<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Laptop extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'category'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'laptop_id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'laptop_title'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'laptop_price' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'laptop_price_discount' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'laptop_img'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('laptop_id', true);
        $this->forge->createTable('laptop');
    }

    public function down()
    {
        $this->forge->dropTable('laptop');
    }
}
