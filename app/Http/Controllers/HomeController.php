<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Auth;
use App\Models\ListCar;


use App\Models\User;

class Homecontroller extends Controller
{
    public function index(Request $request)
    {

       
        $cars = ListCar::all();
        return view('Frontend.index', compact('cars'));
        
    }
    public function service()
    {
        return view('Frontend.service');
    }
    public function about()
    {
        return view('Frontend.about');
    }
    public function cars()
    {
        return view('Frontend.car');
    }
    public function Findcars(Request $request)
    {

                $cars=ListCar::all();
        $directory = public_path('uploads/cars');

        // Get all files in the directory
        $files = File::files($directory);
    
        // Select a random file from the array of files
        $randomFile = $files[array_rand($files)];
    
        // Generate the URL for the randomly selected image
        $imageUrl = asset('uploads/cars/' . $randomFile->getFilename());


        return view('Frontend.find-your-car', ['cars' => $cars, 'imageUrl' => $imageUrl]);
    }
    public function pages()
    {
        return view('Frontend.pages');
    }
    public function contact()
    {
        return view('Frontend.contact');

    }
    

    public function booking($id)

    {
        $cars=ListCar::findOrFail($id);
    
        return view('Frontend.booking',compact('cars'));

    }

    public function team()
    {
        return view('Frontend.team');

    }


    public function testimonial()
    {
        return view('Frontend.testimonial');

    }
     
    
    public function  detail(Request $request, $id)
    {
        $cars=ListCar::findOrFail($id);
        return view('Frontend.detail',compact('cars'));

    }


    public function  register()
    {
        return view('Frontend.components.register');

    }

    
    public function  login()
    {
        return view('Frontend.components.login');

    }


    public function StoreUser(Request $request)
    {
      try
      { $validated=$request->validate([
            'name'=>['required','string','max:255'],
            'email'=>['required','email','unique:users','max:255'],
            'phone'=>['required','string','max:255'],
            'password'=>['required','string','max:255']


        ]);
      
        $validated['password']=Hash::make($request->password);

        User::create($validated);

    
        toast('User Created Successfully', 'success');
        return back()->with('success','user created sucessfully');
       
    }
    catch(ValidationExecption $errors)
    {
        return back()->withErrors($errors->validator->errors());
    }
       
    }


    public function userHome()
    {
        return view('user.UserHome');
    }


    
    public function userLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/index');


    }





}
