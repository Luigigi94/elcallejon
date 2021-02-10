<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'featured',
        'product_id'
    ];

    protected $casts = [
        'created_at' => 'datetime' ,
        'updated_at' => 'datetime'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function getUrlAttribute()
    {
        if (substr($this->image, 0, 4) === 'http')
        {
            return $this->image;
        }
        return '/img/products/'.$this->image;
    }
}
