<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Rohim Muhamad',
                'email'    => 'admin@gmail.com',
                'password' => password_hash('rahasia', PASSWORD_BCRYPT),
                'created_at' => Time::now(),
            ],
            [
                'name' => 'Dicky',
                'email'    => 'bersamamenitinur@gmail.com',
                'password' => password_hash('dicky123', PASSWORD_BCRYPT),
                'created_at' => Time::now(),
            ],
        ];

        $this->db->table('user')->insertBatch($data);
    }
}
