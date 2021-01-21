<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductImage extends Model
{
//    use HasFactory;
//    protected $fillable = [
//        'image',
//        'featured',
////        'products_id'
//    ];
//
//    protected $casts = [
//        'created_at' => 'datetime' ,
//        'updated_at' => 'datetime'
//    ];

    public function product(): BelongsTo
    {
        return$this->belongsTo(Product::class);
    }
}
