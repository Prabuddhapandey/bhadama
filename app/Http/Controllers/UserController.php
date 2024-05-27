<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListCar;
use App\Models\Rating;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

     public function echo(Request $request )

     {
        
        $data = Rating::with('User', 'ListCar')
             ->where('rating', 5)
             ->get();

        return view('echo', compact('data'));
     }


     
     public function echoDetail(Request $request,$id )

     {
        $data=Rating::with('ListCar')->findOrFail($id);
        return view('echo_detail',compact('data'));
     }


    public function listCar(Request $request)

    {
        
          
        $validated=$request->validate([
            'fname'=>['required','string','max:255'],
            'lname'=>['required','string','max:255'],
            'email'=>['required','string','unique:list_cars','max:100'],
            'phone'=>['required','string','max:100'],
            'location'=>['required','string','max:255'],
            'model'=>['required','string','max:100'],
            'date'=>['required','string','max:100'],
            'time'=>['required','string','max:100'],
            'price'=>['required'],
            'image'=>'nullable',
            'type' => 'required'
        ]);

        $validated['user_id'] =Auth::id();
           // Handle image upload and save
          
    if($request->hasfile('image'))
    {
     $file=$request->file('image');
     $extension=$file->getClientOriginalExtension();
     $filename=time().'.'.$extension;
     $file->move('uploads/listcars/',$filename);
     $validated['image']=$filename;
 
    }
         ListCar::create($validated);
         toast('Listed Successfully', 'success');
         return back()->with('success','listed sucessfully');

    }


    public function userLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/index');
    }



}


