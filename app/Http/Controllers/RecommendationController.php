<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\RecommendationService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Rating;

class RecommendationController extends Controller
{
    protected $recommendationService;

    public function __construct(RecommendationService $recommendationService)
    {
        $this->recommendationService = $recommendationService;
    }

    public function recommendCars($userId)
    {
       
      
        $user = auth()->user(); // Retrieve the authenticated user
        $userId = $user->id; // Get the user ID
        $recommendedCars = $this->recommendationService->recommendCarsForUser($userId);
       return view('recommendations', compact('recommendedCars','userId'));
        
        
    }

}