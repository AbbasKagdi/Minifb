<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    // enable data storage
    // protected $fillable = ['title', 'description', 'company', 'email', 'tags', 'location', 'website'];

    public function ScopeFilter($query, array $filters){
        if($filters['tag'] ?? false){
            $query->where('tags', 'like', '%'.request('tag').'%');
        }
        if($filters['search'] ?? false){
            $query->where('title', 'like', '%'.request('search').'%')
                ->orWhere('description', 'like', '%'.request('search').'%')
                ->orWhere('tags', 'like', '%'.request('search').'%');
        }
    }

    // Relationship with user
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    
    // Relationship with comments
    // only comments with parent id null are top level comments (directly on the listing)
    public function comments(){
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }

    // Accessing name property of user using user_id in listing
    public function author($user_id){
        return User::find($user_id)->name;
    }
}
