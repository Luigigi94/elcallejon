<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'id',
        'board_id',
        'status_id',
        'user_id',
        'total'
    ];
    use HasFactory;
}
