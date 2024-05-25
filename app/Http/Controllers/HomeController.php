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
         $cars = ListCar::paginate(6);
          
        if($request->ajax())
        {
                return response()->json([
                    'html' => view('Frontend.components.FindYourCar', compact('cars'))->render(),
                    'pagination' => (string) $cars->links('vendor.pagination.bootstrap-4')
                ]);
        }
        
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
        $perPage = 6; // Items per page (you can adjust this)

        $selectedModel = $request->get('model');

        $carsQuery = ListCar::query(); // Start with a clean query

        if ($selectedModel) {
            $carsQuery->where('model', $selectedModel); // Filter by model if selected
        }

        $cars = $carsQuery->paginate($perPage); // Apply pagination

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.components.FindYourCar', compact('cars'))->render(),
                'pagination' => (string) $cars->links('vendor.pagination.bootstrap-4'),
            ]);
        }

        return view('Frontend.find-your-car', compact('cars'));
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

    public function getCars(Request $request)
{
    $perPage = 6;
    $cars = listCar::paginate($perPage);

    if ($request->ajax()) 
    {
       return response()->json([
                    'html' => view('Frontend.components.FindYourCar', compact('cars'))->render(),
                    'pagination' => (string) $cars->links('vendor.pagination.bootstrap-4')
                ]);

   
}

}
}
