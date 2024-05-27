<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\ListCar;

class CarListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $profileData=ListCar::all();
       
        return view('admin.CarList.car_table',compact('profileData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
      
        $profileData=ListCar::find($id);
        return view('admin.CarList.edit-car-list',compact('profileData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        
        $validated=$request->validate([
            'fname'=>['required','string','max:255'],
            'lname'=>['required','string','max:255'],
            'email'=>['required'],
            'phone'=>['required','string','max:100'],
            'location'=>['required','string','max:255'],
            'model'=>['required','string','max:100'],
            'date'=>['required','string','max:100'],
            'time'=>['required','string','max:100'],
            'image'=>'nullable'
            

        ]);
        $cars=ListCar::findOrFail($id);

      if($request->hasfile('image'))
      {
        $destination='upload/listcars/'.$request->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $file=$request->file('image');
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('upload/listcars', $filename);
        $validated['image'] = $filename;


      }
      $cars->update($validated);
      toast('Updated Successfully', 'success');

      return back()->with('success','updated sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        
      $data=ListCar::findOrFail($id);
        $destination='uploads/listcars/'.$data->image;
           if(File::exists($destination))
           {
              File::delete($destination);
           }
        $data->delete();
        return back()->with('success', 'Deleted successfully.');
        
    }
}
