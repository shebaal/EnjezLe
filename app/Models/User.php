<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Nette\Utils\Arrays;
use PhpParser\Node\Expr\Cast\Array_;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable implements MustVerifyEmail
{
    use LaratrustUserTrait;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];
 
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function role(){
        return $this->belongsTo(Role::class);
    }

    // public function scopeFilter($query, array $filters){

    //     $query->when($filters['search'] ?? false, fn($query,$search) =>
      
    //     $query 
    //     ->where('name' , 'like' , '%' . $search . '%')
    //     ->orWhere('email' , 'like' , '%' . $search . '%')
        
    //     );
    // }
}
