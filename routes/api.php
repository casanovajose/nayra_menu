<?php

use Illuminate\Http\Request;
use App\Http\Resources\Food as FoodResource;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/food', function() {
    $foods = App\Food::all();
    return FoodResource::collection($foods);
});

Route::get('/food/{id}', function($id) {
    return new FoodResource(App\Food::find($id));
});

Route::post('/food', function(Request $request) {
    $newFood = new App\Food;
    $newFood->count = 1;
    $newFood->last_time = date('Y-m-d');
    $newFood->fill($request->all());
    $newFood->save();
    return new FoodResource($newFood);
});