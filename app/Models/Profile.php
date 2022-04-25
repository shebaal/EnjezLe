<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'image',
        'first_name',
        'last_name',
        'phone',
        'gander',
        'country',
        'major',
        'Job_title',
        'describe',
        'user_id',
        'status',
        
        
    ];
}
