<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Booking;
use Illuminate\Support\Facades\Validator;
use Mail;
use App\Models\User;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Auth;
use App\Mail\AdminMail;


class BookingController extends Controller
{

    public function booking($id)

    {
        $reservation = Session::get('reservation');
      
        $cars=ListCar::findOrFail($id);
    
        return view('Frontend.booking',compact('cars'));

    }

    
    public function bookStore(Request $request)
    {          
        $userId =Auth::id();
        $count = Booking::where('user_id',$userId)->where('status','pending')->count();

        $data = $request->only([
            'car_id',
            'fname',
            'lname',
            'email',
             'phone',
            'pickup',
            'destination',
            'time',
             'age',
            'citizen_id',
            'payment',
        ]);

        $validator = $request->validate([
            'car_id' => 'required|exists:list_cars,id',
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'string', 'max:255'],
            'pickup' => ['required', 'string', 'max:255'],
            'destination' => ['required', 'string', 'max:255'],
            'time' => ['required', 'string', 'max:255'],
            'age' => ['required', 'string', 'max:255'],
            'citizen_id' => ['required', 'string', 'max:255'],
            'citizen_image' =>'required',
            'payment' => ['required', 'string', 'max:255'],
        ]);

        $validator['user_id'] = Auth::id();   
        if($count === 1) {
            return back()->with('success','cannot book more than one'); 
        }
        else{
            
        Session::put('reservation', $data);
        Booking::create($validator);

        toast('Booked Successfully', 'success');
        return back()->with('success','booked successfully'); 
        }
      

    }
}
