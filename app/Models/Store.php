<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{

    public function user()
    {
        return $this->belongsTo(User1::class, 'user_id', 'id');
    }

    public function promotionPack()
    {
        return $this->hasMany(PromotionPack::class, 'store_id', 'id');
    }

    public function foods()
    {
        return $this->hasMany(Food::class, 'store_id', 'id');
    }
}
