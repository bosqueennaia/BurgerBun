<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'menu' => 'Steak Burger',
            'price' => 12,
            'category' => 'Burgers',
            'photo' => '/burgerbun/assets/images/g1.jpg', // Adjust the path
        ];

        $this->db->table('menu')->insert($data);

        $data = [
            'menu' => 'Cheese Burger',
            'price' => 10,
            'category' => 'Burgers',
            'photo' => '/burgerbun/assets/images/g2.jpg', // Adjust the path
        ];

        $this->db->table('menu')->insert($data);
    }
}
