<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table='order_details';

    
public function order(){
    return $this->belongsTo(Order::class, 'order_id', 'id');
}

public function food(){
    return $this->belongsTo(Food::class, 'food_id', 'id');
}
}
