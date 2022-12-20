<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    // handle data from listing creation form and store in db
    public function store(Request $request){
        dd($request);
        $formFields = $request->validate([
            'comment'=>'required',
            'listing_id'=>'required'
        ]);

        // setting comment ownership to the current user
        $formFields['user_id'] = auth()->id();

        // send data to comment model for storing
        Comment::create($formFields);

        return redirect('listings/'.$formFields['listing_id'])->with("message", "comment posted successfully");
    }
}
