<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
   protected $fillable = [
        'title',
        'Description',
        'date',
        'address',
        'status',
        'user_id',
    ];

}
