<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::Create([
        //     'name'=>'admin',
        //     'email' => 'admin@gmail.com',
        //     'password' =>Hash::make('admin123'),
        // ]);
    }
}
