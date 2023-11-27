<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'price', 'description','image', 'promo_id'
    ];

    public function sold(): HasMany {
        return $this->hasMany(Shop::class, 'product_id', 'id');
    }
}
