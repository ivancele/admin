<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
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
        'firstNames',
        'lastName',
        'idNumber',
        'grade',
        'section',
        'role',
        'parent_id',
        'email',
        'password',
        'suspended',
        'suspension_info',
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
        'suspension_info' => 'json',
        'grade' => 'integer',
        'parent_id' => 'integer',
        'suspended' => 'boolean',
    ];

    //Set a mutator to encrypt password when it is being set

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

    public function scopeSuspended($query)
    {
        return $query->where('suspended', false);
    }

    public function scopeStudent($query)
    {
        return $query->where('role', 'student');
    }

    public function scopeParent($query)
    {
        return $query->where('role', 'parent');
    }

    public function isStaff()
    {
        return $this->role == 'staff';
    }

    public function isParent()
    {
        return $this->role == 'parent';
    }

}
