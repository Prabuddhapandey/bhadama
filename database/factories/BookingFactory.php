<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;
use App\Models\ListCar;
use App\Models\Rating;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
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
                //
                
    
                'fname' => $this->faker->randomElement([ 'Andrew','Amelia','Charlotte','Christopher','Evelyn','David','Michael','William','Matthew','Christopher',  'Andrew', 'Matthew',]),

                'lname' => $this->faker->randomElement(['Garcia', 'Jones', 'Davis', 'Hernandez', 'Rodriguez', 'Wilson', 'Moore', 'Taylor', 'Anderson', 'Thomas', 'Jackson', 'Evans',]),
     
                'email' => $this->faker->email,
                'phone' => $this->faker->phoneNumber,
                'pickup' => $this->faker->randomElement(['chabahil', 'koteshwor', 'Boudha', 'Tushal', 'RNAC', 'Gangabu','Jamal','EtankataKunna']),
                
                'destination' => $this->faker->randomElement(['chabahil', 'koteshwor', 'Boudha', 'Tushal', 'RNAC', 'Gangabu','Jamal','EtankataKunna']),
                'age'=>$this->faker->numberBetween(20,50),
                'citizen_id'=>$this->faker->numberBetween(2344444444-32222222222),
                'car_id' => $this->faker->unique()->numberBetween(1, 40),
                'user_id' => $this->faker->unique()->numberBetween(1, 40),

            
            ];
        
    }
}
