<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Seeders\UserSeeder;
use App\Models\Rating;
use App\Models\User;
use App\Models\ListCar;
use DB;
use Illuminate\Database\Eloquent\Factories\Factory;

class RatingSeeder extends Seeder 
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rating::factory()->count(50)->create();
    }
}