<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\ListCar;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;


class RatingController extends Controller
{
    public function index(Request $request ,String $id)
    {
        
        $cars=Booking::with('listCar')->findOrFail($id);
     
        return view('Frontend.rating',compact('cars'));
    }
        
    public function ratingStore(Request $request)
    {
        $validated=$request->validate([
            'car_id' => 'required|exists:list_cars,id',
            'rating'=>['required']
        ]);
       $validated['user_id']=Auth::id();
        Rating::create($validated);

        toast('Rated Successfully', 'success');
        return back()->with('success','Rated successfully');

    }
  
}
