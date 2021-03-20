<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'num_board',
        'place',
        'status_id'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
