<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataPrinter extends Seeder
{
    public function run()
    {
        $data = [
            'category' => 'printer',
            'printer_id' => '1',
            'printer_title'    => 'EPSON',
            'printer_price'    => '4.800.000,00',
            'printer_price_discount'    => '4.000.000,00',
            'printer_img'    => 'product28.png',

        ];

        // Simple Queries
        // $this->db->query("INSERT INTO laptop (laptop_id, laptop_title, laptop_price) VALUES(:laptop_id:, :laptop_title, laptop_price:)", $data);

        // Using Query Builder
        $this->db->table('printer')->insert($data);
    }
}
