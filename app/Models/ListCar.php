<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rating;

class ListCar extends Model
{
    use HasFactory;
    protected $fillable=([

        'fname',
        'lname',
        'email',
        'phone',
        'location',
        'model',
        'date',
        'time',
        'image',
        'price',
        
        


    ]);

    public function booking()
    {
        return $this->hasMany(Booking::class,'car_id');
    }
    public function rating()
    {
        return $this->hasMany(Rating::class);
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
