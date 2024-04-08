<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'password'=>Hash::make('password'),
            'role'=>'0',
        ]);

        User::create([
            'name'=>'Raj Pandey',
            'email'=>'raj@gmail.com',
            'password'=>Hash::make('1234'),
            'role'=>'1',
        ]);
      
     
     
     

    }


}
