<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Booking;
use Mail;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use App\Mail\AdminMail;


class BookingController extends Controller
{
    
    public function bookStore(Request $request)
    {
    
        $validated=$request->validate([
            'car_id' => 'required|exists:list_cars,id',
        'fname'=>['required','string','max:255'],
        'lname'=>['required','string','max:255'],
        'email'=>['required'],
        'phone'=>['required','string','max:255'],
        'pickup'=>['required','string','max:255'],
        'destination'=>['required','string','max:255'],
        // 'date'=>['required','string','max:255'],
        'time'=>['required','string','max:255'],
        'age'=>['required','string','max:255'],
        'citizen_id'=>['required','string','max:255'],
        'citizen_image'=>['required'],
        'payment'=>['required','string','max:255'],

        ]);
        $validated['user_id'] = Auth::id();
        

         Booking::create($validated);
        // Mail::to($request->email)->send(new AdminMail($request->destination));
        Mail::to(env('MAIL_FROM_ADDRESS','prabuddharajpandey@gmail.com'))->send(new AdminMail($request->all()));
        toast('Booked Successfully', 'success');
        return back()->with('success','booked successfully');

    }
}
