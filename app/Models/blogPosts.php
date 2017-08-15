<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class blogPosts extends Model
{
     //protected $table = "blogPost";
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}

