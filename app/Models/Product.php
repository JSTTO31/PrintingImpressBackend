<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getCreatedAtAttribute($data){
        return Carbon::parse($data)->format('Y-m-d');
    }

    public function getUpdatedAtAttribute($data){
        return Carbon::parse($data)->format('Y-m-d');
    }


    public function orders(){
        return $this->hasMany(Order::class);
    }

}
