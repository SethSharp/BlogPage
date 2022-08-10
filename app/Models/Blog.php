<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'title',
        'body',
    ];
    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
