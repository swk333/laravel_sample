<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\ListingController;
use App\HTTP\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::get('/posts', function() {
//     return response() ->json(
//         ['posts' => [
//             [
//                 'id' => 1,
//                 'title' => 'First Post',
//                 'body' => 'This is the first post'
//             ],
//             [
//                 'id' => 2,
//                 'title' => 'Second Post',
//                 'body' => 'This is the second post'
//             ],
//             [
//                 'id' => 3,
//                 'title' => 'Third Post',
//                 'body' => 'This is the third post'
//             ]
//             ]
//         ]);
// });



Route::get('/listings', [ListingController::class, 'index']);
Route::get('/listings/{listing}', [ListingController::class, 'show']);


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::middleware('auth:sanctum')->group(function() {
  Route::get('/edit', function() {
    return 'login user';
  });
});