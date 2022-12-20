<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // Relationship with users
    public function user(){
        return $this->belongsTo(User::class);
    }

    // Relationship with listings
    public function listing(){
        return $this->belongsTo(Listing::class);
    }

    // Relationship with itself
    public function replies(){
        return $this->hasMany(Comment::class, 'parent_id');
    }
}
