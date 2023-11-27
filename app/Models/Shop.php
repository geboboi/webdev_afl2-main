<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'shop_name',
        'address',
    ];
    public function avail(): BelongsTo {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
