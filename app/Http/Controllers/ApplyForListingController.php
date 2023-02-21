<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use App\Http\Requests\ClickRequest;

class ApplyForListingController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Listing $listing, ClickRequest $request)
    {
       $listing->clicks()->create($request->all());

    return to_route('listings.all')->with('message', "Prijava je uspješno poslana ");
       
         
         }
    }

