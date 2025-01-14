<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
          
         
           [
            'name' =>'User',
            'username' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user12'),
            'role' => 'user',
            'status' => '1',
           ]
        ]);
    }
}
