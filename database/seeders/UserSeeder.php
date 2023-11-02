<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
    //     $users = [
    //         ['name' => 'admin', 'email' => 'admin@gmail.com', 'password' => 'password', 'email_verified_at' => null, 'remember_token' => null],
    //     ];

    //     foreach ($users as $user) {
    //         User::create($user);
    //     }
    // }

    public function run(): void
    {
        Model::unguard(); // Disable mass assignment protection

        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('password'), // Hash the password
                'email_verified_at' => null,
                'remember_token' => null,
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }

        Model::reguard(); // Re-enable mass assignment protection
    }
}
