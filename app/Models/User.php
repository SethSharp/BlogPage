<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticable;

class User extends Authenticable
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name', 'role', 'email', 'password'];
    protected $hidden = ['password'];
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
