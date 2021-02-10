<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tills extends Model
{
    use HasFactory;

    protected $fillable = [
      'total',
      'command_id',
      'user_id'
    ];
}
