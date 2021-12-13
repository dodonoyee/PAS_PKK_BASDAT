<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataAccessories extends Seeder
{
    public function run()
    {
        $data = [
            'category' => 'accessories',
            'accessories_id' => 'acc01',
            'accessories_title'    => 'Headset',
            'accessories_price'    => '480.000,00',
            'accessories_price_discount'    => '400.000,00',
            'accessories_img'    => 'product19.png',

        ];

        // Simple Queries
        // $this->db->query("INSERT INTO laptop (laptop_id, laptop_title, laptop_price) VALUES(:laptop_id:, :laptop_title, laptop_price:)", $data);

        // Using Query Builder
        $this->db->table('accessories')->insert($data);
    }
}
