<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Http\Request;
use App\Http\Requests\ListingRequest;
use Illuminate\Support\Facades\Gate;



class ListingController extends Controller
{

    public function __construct(){
 
        $this->middleware('auth');

        $this->authorizeResource(Listing::class);
      
    }

    public function index(){

        $listings= Listing::visibleFor(request()->user())->latest()->paginate(15)->withQueryString();

        return view('listings.index',compact('listings'));
    }

    public function create(){

    
        return view("listings.create");
    }

   public function store(ListingRequest $request){
    
    Listing::create($request->getData());
    return to_route('listings.index')->with('message', "Oglas je objavljen");
   }

   public function edit(Listing $listing){

    return view("listings.edit",compact('listing'));
}

public function update(Listing $listing, ListingRequest $request){

$listing->update($request->all());
return to_route('listings.index')->with('message', "Uspješno ste napravili izmjene oglasa");
}

public function destroy(Listing $listing)
{

    $listing->delete();
    return to_route('listings.index')->with('message', "Oglas je uklonjen");
}

}
