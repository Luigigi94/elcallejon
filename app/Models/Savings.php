<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Savings extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'quantity'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
