<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $table='promotions';

public function promotionPack(){
    return $this->hasMany(PromotionPack::class, 'promotion_id', 'id');
}

}
