<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ContactSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'bam',
                'email' => 'bamski@example.com',
                'phone' => '123456789',
                'subject' => 'pesan',
                'message' => 'untuk 20 orang',
                'created_at' => '2024-05-31 10:00:00',
            ],
            [
                'name' => 'nai',
                'email' => 'naisky@example.com',
                'phone' => '987654321',
                'subject' => 'reserve',
                'message' => 'untuk dinner',
                'created_at' => '2024-05-31 11:00:00',
            ],
        ];

        // Using Query Builder
        $this->db->table('contact')->insertBatch($data);
    }
}
