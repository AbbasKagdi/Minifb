<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    // Relationship with replies
    public function replies(){
        return $this->hasMany(Comment::class, 'parent_id');
    }

    // Relationship with user
    public function listings(){
        return $this->belongsTo(Listing::class, 'listing_id');
    }

    // Relationship with user
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
