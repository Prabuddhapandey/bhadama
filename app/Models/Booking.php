<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;

    protected $fillable=([
           'car_id',
           'fname',
            'lname',
            'email',
           'phone',
            'pickup',
           'destination',
            'date',
            'time',
            'age',
            'citizen_id',
            'citizen_image',
            'payment',
            'user_id',
            'status'


       
    ]);
     
    public function listCar()
    {
        return $this->belongsTo(ListCar::class,'car_id');

    }
    
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');

    }
    

}
