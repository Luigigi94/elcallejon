<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
//    use HasFactory;
//
//    protected $fillable = [
//        'name',
//        'description',
//        'long_description',
//        'price',
//        'category_id',
//    ];
//
//    protected $casts = [
//        'created_at' => 'datetime',
//        'updated_at' => 'datetime'
//    ];
    public function category(): belongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(ProductImage::class);
    }
}
