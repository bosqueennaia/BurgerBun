<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'John Doe',
                'age' => 30,
                'gender' => 'Male',
                'marital_status' => 'Married',
                'work_schedule' => 'Full Time',
                'position' => 'Manager',
                'photo' => '/burgerbun/assets/images/one.jpg',
            ],
            [
                'name' => 'Jane Doe',
                'age' => 25,
                'gender' => 'Female',
                'marital_status' => 'Single',
                'work_schedule' => 'Shift',
                'position' => 'Staff',
                'photo' => '/burgerbun/assets/images/two.jpg',
            ],
        ];

        $this->db->table('employees')->insertBatch($data);
    }
}
