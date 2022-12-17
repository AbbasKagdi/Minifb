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
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->simplePaginate(8) ]);
    }

    // show single listing
    public function show(Listing $listing){
        return view('listings.show', ['listing' => $listing ]);
    }

    // edit listing form
    public function edit(Listing $listing){
        return view('listings.edit', ['listing'=> $listing]);
    }

    // listing creation form
    public function create(){
        return view('listings.create');
    }

    // handle data from listing creation form and store in db
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

        // logo upload
        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        // send data to listing model for storing
        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing created Successfully!');
    }

    // handle data from listing updation form and store in db
    public function update(Request $request, Listing $listing){
        $formFields = $request->validate([
            'title'=>'required',
            'company'=>['required'],
            'location'=>'required',
            'website'=>'required',
            'email'=>['required', 'email'],
            'tags'=>'required',
            'description'=>'required'
        ]);

        // logo upload
        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        // send data to listing model for updating / storing
        $listing->update($formFields);

        return redirect('/listings/'.$listing->id)->with('message', 'Listing updated Successfully!');
    }

    // delete a listing
    public function destroy(Listing $listing){
        $listing->delete();
        return redirect('/')->with('message', 'Listing deleted successfully');
    }

}
