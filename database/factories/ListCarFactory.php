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

            'fname' => $this->faker->name,
            'lname' => $this->faker->name,
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'location' => $this->faker->randomElement(['chabahil', 'koteshwor', 'Boudha', 'Tushal', 'RNAC', 'Gangabu','Jamal','EtankataKunna']),
            
        'price' =>$this-> faker->numberBetween(100000,2000000),
          
        ];
    }
}
