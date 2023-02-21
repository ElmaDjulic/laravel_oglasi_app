<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListListingController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $users=User::latest()->count();

        $listings= Listing::active()->latest()
        ->allowedSearch('title')
        ->paginate(5)
        ->withQueryString();

        return view('listings-list',compact('listings','users'));
    }
}
