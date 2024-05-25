<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\User;

class MyCartController extends Controller
{
    
   private  $_data = [];

    public function index(Request $request)
    {
        $userId = Auth::id();

        if(Auth::check())
        {
           $this->_data['cars'] = Booking::leftJoin(
                                   'list_cars','list_cars.id','bookings.car_id')
                                   ->select(
                                    'bookings.*',
                                     'list_cars.model as model')
                                   ->where('user_id', $userId)
                                   ->where('status','=','pending')
                                     ->get();
        //    dd($this->_data['cars']);
            $this->_data['sum'] = Booking::leftJoin('list_cars','list_cars.id','bookings.car_id')
                           ->select(
                            'status',
                            'price'
                           )->where('user_id',$userId)->where('status','=','pending')->pluck('price')->sum();
               
       
        }
        else
        {
            $cars=0;
        }

        return view('Frontend.my-cart', $this->_data);
    }


    public function edit(String $id)
    {

        $cars =Booking::findOrFail($id);
       return view('Frontend.edit-booking',compact('cars'));
    }

    public function destroy(string $id)
    {
        
        try {
            $booking = Booking::findOrFail($id);
            $booking->delete();
    
            return response()->json(['success' => true]);
        }
         catch (\Exception ) {
            return response()->json(['success' => false, 'error' => 'Error deleting booking']);
        }
     
    }



}
