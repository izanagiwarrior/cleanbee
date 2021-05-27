<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {

        $user = [
            [
                'name' => 'Admin',
                'last_name' => 'Admin',
                'email' => 'admin@gmail.com',
                'is_admin' => '1',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'User',
                'last_name' => 'User',
                'email' => 'user@gmail.com',
                'is_admin' => '0',
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
