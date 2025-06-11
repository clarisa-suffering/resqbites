<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'foods';

    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class, 'food_id', 'id');
    }

    public function store()
    {
        return $this->belongsTo(Store::class, 'id', 'store_id');
    }

    protected $fillable = ['name', 'description', 'price', 'stock', 'photo_name', 'photo_path', 'store_id'];
}
