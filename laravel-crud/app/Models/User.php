<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     * 
     * 
     */


     const ROLE_ADMIN ='admin';
     const ROLE_CLIENT ='client';
     const ROLE_FREELANCER ='freelancer';

    protected $fillable = [
        'role',
        'email',
        'password',
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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }





    public function isAdmin()
    {
        return $this->role === self::ROLE_ADMIN;

    }
    public function isClient()
    {
        return $this->role ===self::ROLE_CLIENT;
    }
    public function isFreelancer()
    {
        return $this->role === self::ROLE_FREELANCER;
    }
}