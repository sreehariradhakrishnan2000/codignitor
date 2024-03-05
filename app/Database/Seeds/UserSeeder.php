<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'roberto',
                'email' => 'roberto@gmail.com',
            ],
            [
                'name' => 'carlos',
                'email' => 'carlos@gmail.com',
            ],
        ];
    
        $this->db->table('test')->insertBatch($data);
    }
}
