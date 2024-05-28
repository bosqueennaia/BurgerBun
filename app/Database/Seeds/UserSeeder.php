<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        
            $data = [
                'name' => 'naia',
                'email'    => 'bosqueennaia@gmail.com',
                'password'    => 'naiadhn',
            ];
            $this->db->table('users')->insert($data);
    }
}