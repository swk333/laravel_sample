<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('listings', [
//         'heading' => 'Latest Listings',
//         'listings' => Listing::all()
//     ]);
// });

// // Single Listing
// Route::get('listing/{listing}', function(Listing $listing) {
//     return view('listing', [
//         'listing' => $listing
//     ]);
// });

// Route::get('/sample', function () {
//     return view('sample');
// });

// Route::get('/hello', function() {
//     return response('<h1>Hello World</h1>', 200)
//         ->header('Content-Type', 'text/html')
//         ->header('foo', 'bar');
// });

// // Route::get('/posts/{id}', function($id) {
// //     return response('This is post number'. $id);
// // })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request) {
//     ddd($request);
// });

Route::get('/{any}', function() {
    return view('app');
})->where('any', '.*');
