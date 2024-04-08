<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'list_car_id', 'rating'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

      
    public function listCar()
    {
        return $this->belongsTo(ListCar::class,'list_car_id');

    }

    
    
  
}
