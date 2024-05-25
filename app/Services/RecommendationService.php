<?php

// app/Services/RecommendationService.php

namespace App\Services;

use App\Models\User;
use App\Models\ListCar;
use App\Models\Rating;
use App\Models\Booking;

use Illuminate\Support\Facades\DB;

class RecommendationService
{
    public function recommendCarsForUser($userId)
{
           // Get the target user's ratings
    $targetUserRatings = Rating::where('user_id', $userId)->pluck('rating', 'list_car_id');

    // Find other users who have rated similar cars
    $similarUsers = User::whereHas('rating', function ($query) use ($targetUserRatings) {
        $query->whereIn('list_car_id', $targetUserRatings->keys()->toArray());
    })->where('id', '!=', $userId)->get();

    // Calculate similarity between the target user and other users
    $similarities = [];
    foreach ($similarUsers as $user) {
        $similarity = $this->calculateSimilarity($targetUserRatings, $user->ratings);
        $similarities[$user->id] = $similarity;
    }

    // Sort users by similarity in descending order
    arsort($similarities);

    // Get top similar users and their ratings
    $topSimilarUsers = array_slice($similarities, 0, 5, true);

    // Get cars rated by top similar users with ratings of 4 or 5
    $recommendedCars = ListCar::whereHas('rating', function ($query) use ($topSimilarUsers) {
        $query->whereIn('user_id', array_keys($topSimilarUsers))
              ->where('rating', '>=', 3); // Filter for ratings of 4 or higher
    })->whereNotIn('id', $targetUserRatings->keys()->toArray())->get();

    return $recommendedCars;
}

private function calculateSimilarity($ratings1, $ratings2)
{
    

    return rand(0, 1); // Random similarity for demonstration
}
 }
    
 

