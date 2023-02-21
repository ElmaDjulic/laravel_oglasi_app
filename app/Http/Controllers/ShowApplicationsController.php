<?php

namespace App\Http\Controllers;

use App\Models\Click;
use App\Models\Listing;
use Illuminate\Http\Request;

class ShowApplicationsController extends Controller
{
    
    public function __invoke(Click $click,Listing $listing)

    {
        $clicks= Click::visible(request()->user())->latest()->paginate(15);

        return view('listings.applications',compact('click','clicks','listing'));
    }
}
