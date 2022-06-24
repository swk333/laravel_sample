<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/posts', function() {
    return response() ->json(
        ['posts' => [
            [
                'id' => 1,
                'title' => 'First Post',
                'body' => 'This is the first post'
            ],
            [
                'id' => 2,
                'title' => 'Second Post',
                'body' => 'This is the second post'
            ],
            [
                'id' => 3,
                'title' => 'Third Post',
                'body' => 'This is the third post'
            ]
            ]
        ]);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
