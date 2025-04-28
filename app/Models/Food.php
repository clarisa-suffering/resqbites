<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table='foods';

public function orderDetail(){
    return $this->hasMany(OrderDetail::class, 'food_id', 'id');
}
}
