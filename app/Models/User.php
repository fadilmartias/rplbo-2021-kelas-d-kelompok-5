<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nama_user',
        'email',
        'password',
        'nip',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scopeAll($query) {
        return $query->get();
    }
    public function scopeGetAll($query) {
        return $query->orderBy('created_at')->get();
    }

    public function scopeCreate($query) {
        return $query->get();
    }

    public function scopeFind($query) {
        return $query->get();
    }

    public function scopeUpdate($query) {
        return $query->get();
    }

    public function scopeDelete($query) {
        return $query->get();
    }

    public function scopeJmlUser($query) {
        return $query->get()->count();
    }
}

