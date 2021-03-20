<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'id',
        'name',
        'description',
        'long_description',
        'price',
        'category_id',
    ];

    protected $casts=[
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(ProductImage::class);
    }

//    public function commands(): HasMany
//    {
//        return $this->hasMany(Commands::class);
//    }

    public function getFeaturedImageUrlAttribute()
    {
        $featuredImage = $this->images()->where('featured',true)->first();
        if (!$featuredImage)
        {
            $featuredImage = $this->images()->first();
        }

        if ($featuredImage){
            return $featuredImage->url;
        }
        return '/img/products/noimage.jpg';
    }

    public function getCategoryNameAttribute()
    {
        if ($this->category)
            return $this->category->name;

        return 'General';
    }
}
