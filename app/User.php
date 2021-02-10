<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Eloquent Relationships
    public function user_details()
    {
        return $this->hasOne(UserDetail::class);
    } 

    public function addresses()
    {
        return $this->hasOne(Address::class);
    } 

    public function education()
    {
        return $this->hasMany(Education::class);
    } 

    public function user_new_industries()
    {
        return $this->hasMany(UserNewIndustry::class);
    } 
}
