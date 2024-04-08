<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\User;

class MyCartController extends Controller
{
    

    public function myCart(Request $request)
    {

        if(Auth::check())
        {
      $cars=Auth::user()->booking()->get();
        }
        else
        {
            $cars=0;
        }

        return view('Frontend.my-cart',compact('cars'));
    }


    public function edit(String $id)
    {

        $cars =Booking::findOrFail($id);
       return view('Frontend.edit-booking',compact('cars'));
    }

}
