<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataLaptop extends Seeder
{
    public function run()
    {
        $data = [
            'category' => 'laptop',
            'laptop_id' => 'asus01',
            'laptop_title'    => 'ASUS VIVOBOOK A407M',
            'laptop_price'    => '4.800.000,00',
            'laptop_price_discount'    => '4.000.000,00',
            'laptop_img'    => 'product10.png',

        ];

        // Simple Queries
        // $this->db->query("INSERT INTO laptop (laptop_id, laptop_title, laptop_price) VALUES(:laptop_id:, :laptop_title, laptop_price:)", $data);

        // Using Query Builder
        $this->db->table('laptop')->insert($data);
    }
}
