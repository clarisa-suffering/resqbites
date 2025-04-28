<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='order';

    
public function user(){
    return $this->belongsTo(User1::class, 'user_id', 'id');
}

public function orderDetail(){
    return $this->hasMany(OrderDetail::class, 'order_id', 'id');
}

}
