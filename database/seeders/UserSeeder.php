<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        User::insert([
            [
                'id' => 1,
                'name' => "Admin Mg Mg",
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
                'role_id' => 1, // admin
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 2,
                'name' => "Teacher Aye Aye",
                'email' => 'teacher@gmail.com',
                'password' => Hash::make('password'),
                'role_id' => 2, // teacher
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 3,
                'name' => "Student Ko Ko",
                'email' => 'student@gmail.com',
                'password' => Hash::make('password'),
                'role_id' => 3, // student
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 4,
                'name' => "Student Ma Ma",
                'email' => 'mama@gmail.com',
                'password' => Hash::make('password'),
                'role_id' => 3, // student
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 5,
                'name' => "Student Moe Kaung",
                'email' => 'moekaung@gmail.com',
                'password' => Hash::make('password'),
                'role_id' => 3, // student
                'created_at' => $now,
                'updated_at' => $now
            ],
        ]);
    }
}
