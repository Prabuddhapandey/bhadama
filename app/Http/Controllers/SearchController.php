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
   $cars = ListCar::select('model')->get();
    // Get search parameters from the request
    $pickupLocation = $request->input('location');
    $searchModel=$request->input('model');

    
    // Perform the heuristic search based on the search parameters
    $results = ListCar::whereRaw('LOWER(location) LIKE ?', ['%' . strtolower($pickupLocation) . '%'])
                           ->get();
                    
                           
        $user = auth()->user(); // Retrieve the authenticated user
        $userId = $user->id; // Get the user ID
        $recommendedCars = $this->recommendationService->recommendCarsForUser($userId);
    // Return the search results to the view
    return view('search_detail',compact('results','recommendedCars','userId','cars'));
}


public function searchCars(Request $request)
{
    
  
    $selectedModel = $request->get('model');

    // Implement your logic to filter cars based on $selectedModel
    $cars = ListCar::where('model', $selectedModel)->get(); // Example

    // Alternatively, use query scopes or other filtering techniques

    return response()->json([
        'html' => view('frontend.components.FindYourCar', compact('cars'))->render(),
       // 'pagination' => $cars->links('vendor.pagination.bootstrap-4'), // Render the component with filtered cars
    ]);
}
}
