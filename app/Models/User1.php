<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User1 extends Model
{
    protected $table = 'user';

    
public function store(){
    return $this->belongsTo(Store::class, 'user_id', 'id');
}

public function order(){
    return $this->hasMany(Order::class, 'user_id', 'id');
}

}
