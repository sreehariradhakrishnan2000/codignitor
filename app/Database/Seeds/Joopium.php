<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Joopium extends Seeder
{
    public function run()
    {
        $this->db->query("
        CREATE TABLE IF NOT EXISTS users (
            menu_id INT AUTO_INCREMENT PRIMARY KEY,
            menu_name VARCHAR(255),
            category VARCHAR(255),
            description TEXT,
            price DECIMAL(10,2)
        )
    ");

    $data = [
        [
            'menu_name' => 'Chicken Curry',
            'category' => 'Main Course',
            'description' => 'Delicious chicken curry with spices',
            'price' => 9.99,
        ],
        [
            'menu_name' => 'Vegetable Pizza',
            'category' => 'Appetizer',
            'description' => 'Freshly baked vegetable pizza',
            'price' => 12.99,
        ],
        ];

        $this->db->table('users')->insertBatch($data);
    }
}
