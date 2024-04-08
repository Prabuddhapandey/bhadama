<?php

namespace App\Http\Controllers;
use App\Models\ListCar;
use Illuminate\Http\Request;
use App\Models\User;
use App\Services\RecommendationService;
use Illuminate\Support\Facades\Auth;


class SearchController extends Controller
{
    //
 public function __construct(RecommendationService $recommendationService)
 {
     $this->recommendationService = $recommendationService;
 }
   
    public function search()
{
  return view('seachCar');
}

public function postsearch(Request $request)
{

    // Get search parameters from the request
    $pickupLocation = $request->input('location');
    $searchModel=$request->input('model');

    
    // Perform the heuristic search based on the search parameters
    $results = ListCar::where('location', $pickupLocation)
                          ->where('model',$searchModel)
                           ->get();
                    
                           
        $user = auth()->user(); // Retrieve the authenticated user
        $userId = $user->id; // Get the user ID
        $recommendedCars = $this->recommendationService->recommendCarsForUser($userId);
    // Return the search results to the view
    return view('search_detail',compact('results','recommendedCars','userId'));
}
}
