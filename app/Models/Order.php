<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $hidden = ['product_id'];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function getCreatedAtAttribute($date){
        return Carbon::parse($date)->format('Y-m-d');
    }


}
