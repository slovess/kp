<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'surname',
        'name',
        'patronymic',
        'birthday',
        'email',
        'role',
        'password'
    ];

    protected $hidden = [
        'remember_token',
        'password'
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function order() {
        return $this->hasMany(Order::class, 'user_id');
    }

    public function basket() {
        return $this->hasOne(Basket::class, 'user_id');
    }
}
