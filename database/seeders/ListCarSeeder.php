<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ListCar;
use Illuminate\Database\Eloquent\Factories\Factory;

class ListCarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ListCar::factory()->count(10)->create();
    }
}
