<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    public function index()
    {
        $listings = Listing::all();
        $collection = collect($listings);
        $data = $collection->map(function($listing) {
            $splittedTags = explode(',', $listing->tags);
            $listing->tags = $splittedTags;
            return $listing;
        }
    );
        return $data;
    }

    public function show(Listing $listing) {
        $splittedTags = explode(',', $listing->tags);
        $listing->tags = $splittedTags;
        return $listing;
    }
}