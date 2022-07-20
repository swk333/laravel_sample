<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    public function index()
    {
        return Listing::all();
    }

    public function show(Listing $listing) {
        return $listing;
    }
}
