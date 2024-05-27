<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ListCar>
 */
class ListCarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'model' => $this->faker->randomElement(['Toyota', 'Honda', 'Ford', 'Chevrolet', 'BMW', 'Mercedes-Benz']),
            
            'type' => $this->faker->randomElement(['Sedan', 'SUV', 'Minivan', 'Convertible', 'Sports', 'Wagon','Coupe']),

           'fname' => $this->faker->randomElement([ 'Andrew','Amelia','Charlotte','Christopher','Evelyn','David','Michael','William','Matthew','Christopher',  'Andrew', 'Matthew',]),

           'lname' => $this->faker->randomElement(['Garcia', 'Jones', 'Davis', 'Hernandez', 'Rodriguez', 'Wilson', 'Moore', 'Taylor', 'Anderson', 'Thomas', 'Jackson', 'Evans',]),

            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'location' => $this->faker->randomElement(['Canberra', 'Sydney', 'Brisbane', 'Melbourne', 'Adelaide', 'Gold Coast','Bendigo','Burnie']),
            
            'price' =>$this-> faker->numberBetween(100000,2000000),
          
        ];
    }
}
