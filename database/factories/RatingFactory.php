<?php
namespace Database\Factories;

use App\Models\User;
use App\Models\ListCar;
use App\Models\Rating;
use Illuminate\Database\Eloquent\Factories\Factory;

class RatingFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Rating::class;

    public function definition()
    {
        return [
            'list_car_id' => $this->faker->numberBetween(1, 10),
            'user_id' => $this->faker->numberBetween(1, 10),
            'rating' => $this->faker->numberBetween(1, 5), // Assuming rating is a value between 1 and 5
        ];
    }
}