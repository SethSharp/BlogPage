<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['blog_id', 'user_id', 'comment'];
    public function blog() {
        return $this->hasOne(Blog::class);
    }
    public function user() {
        return $this->hasOne(User::class);
    }
}
