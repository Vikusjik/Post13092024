<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Post extends Model{
    use hasFactory;
    protected $fillable = ['title', 'content', 'user_id'];

    public function comments()
{
    return $this->hasMany(Comment::class);
}
}
