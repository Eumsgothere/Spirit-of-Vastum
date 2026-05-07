<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        $password = password_hash('Password123!', PASSWORD_DEFAULT);

        $data = [
            [
                'first_name' => 'Admin',
                'last_name'  => 'User',
                'email'      => 'admin@example.com',
                'password_hash' => $password,
                'type'       => 'admin',
                'account_status' => 1,
                'email_activated' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'first_name' => 'Client',
                'last_name'  => 'User',
                'email'      => 'client@example.com',
                'password_hash' => $password,
                'type'       => 'client',
                'account_status' => 1,
                'email_activated' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        $this->db->table('users')->insertBatch($data);
    }
}
