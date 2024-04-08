<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Booking;

class AdminController extends Controller
{


    public function index()
   {
    
    return view('admin.admin_home');
   }

   public function BookingTable(){

    $bookings=Booking::all();
     return view('admin.BookingList.booking-table');



   }


    public function logout(Request $request)
    {
     Auth::guard('web')->logout();
     
     // $request->session()->invalid();
 
     // $request->session()->regenerateToken();
     return redirect('/');
    }
}
