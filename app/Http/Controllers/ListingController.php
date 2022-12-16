<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{

    /*
    Common Resources
    index
    show
    create
    store
    edit
    update
    destroy
    */

    // show all listings
    public function index(){
        return view('listings.index', ['listings' => Listing::latest()->filter(request(['tag', 'search']))->get() ]);
    }

    // show single listing
    public function show(Listing $listing){
        return view('listings.show', ['listing' => $listing ]);
    }

    // listing creation form
    public function create(){
        return view('listings.create');
    }

    // listing creation form
    public function store(Request $request){
        $formFields = $request->validate([
            'title'=>'required',
            'company'=>['required', 'unique:listings'],
            'location'=>'required',
            'website'=>'required',
            'email'=>['required', 'email'],
            'tags'=>'required',
            'description'=>'required'
        ]);

        // send data to listing model for storing
        Listing::create($formFields);

        return redirect('/');
    }
    
}
