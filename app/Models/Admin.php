<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $guard = "admin";


    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'avatar',
        'user_type'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'avatar' =>  'array'
     ];

    public  function getFullNameAttribute(){
        return "{$this->first_name } {$this->last_name}";
    }


}
