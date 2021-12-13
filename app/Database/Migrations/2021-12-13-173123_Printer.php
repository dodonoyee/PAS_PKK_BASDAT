<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Printer extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'category'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'printer_id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'printer_title'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'printer_price' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'printer_price_discount' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'printer_img'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('printer_id', true);
        $this->forge->createTable('printer');
    }

    public function down()
    {
        $this->forge->dropTable('printer');
    }
}
