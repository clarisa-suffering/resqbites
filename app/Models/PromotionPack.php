<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PromotionPack extends Model
{
    
protected $table='promotion_packs';

public function store(){
    return $this->belongsTo(Store::class, 'store_id', 'id');
}

public function promotion(){
    return $this->belongsTo(Promotion::class, 'promotion_id', 'id');
}

}
