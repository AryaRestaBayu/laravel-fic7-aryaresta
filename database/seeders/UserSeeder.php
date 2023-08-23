<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(20)->create();
        User::create([
            'name' => 'Arya',
            'email' => 'arya@gmail.com',
            'email_verified_at' => now(),
            'role' => 'admin',
            'phone' => '08822349875',
            'bio' => 'aku admin biasa',
            'password' => Hash::make('123456')
        ]);

        User::create([
            'name' => 'SuperArya',
            'email' => 'superarya@gmail.com',
            'email_verified_at' => now(),
            'role' => 'superadmin',
            'phone' => '083762584920',
            'bio' => 'aku super admin',
            'password' => Hash::make('123456')
        ]);
    }
}
