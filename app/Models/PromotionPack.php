<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromotionPack extends Model
{
    use HasFactory;

    protected $table = 'promotion_packs';

    protected $fillable = [
        'promotion_id',
        'store_id',         // tambahkan jika ada dan perlu mass assignment
        'title',
        'description',
        'price',
        'original_price',
    ];

    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id', 'id');
    }

    public function promotion()
    {
        return $this->belongsTo(Promotion::class, 'promotion_id', 'id');
    }
}
