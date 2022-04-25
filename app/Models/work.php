<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class work extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'image',
        'title',
        'describe',
        'user_id',
        'status',
        'date_end',
    ];
}
