<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    //public $timestamps = false;
    protected $fillable = [
        'user_id',
        'title',
        'body',
    ];
    public function comments() {
        return $this->hasMany(Comment::class);
    }
    public function user() {
        return $this->hasOne(User::class);
    }

    public function getUser($user_id) {
        return User::find($user_id)->name;
    }
}
