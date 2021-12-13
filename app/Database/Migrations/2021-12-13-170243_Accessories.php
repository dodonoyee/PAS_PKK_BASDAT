<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Accessories extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'category'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'accessories_id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'accessories_title'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'accessories_price' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'accessories_price_discount' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'accessories_img'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('accessories_id', true);
        $this->forge->createTable('accessories');
    }

    public function down()
    {
        $this->forge->dropTable('accessories');
    }
}
