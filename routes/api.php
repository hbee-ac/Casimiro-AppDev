<?php

use App\Http\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//get method
Route::get('/greeting', function (){
    return 'hello azhelle';
});

Route::get('/user', function (Request $request) {
    return $request->name . '-' . $request->email;
});

//post method
Route::post('/post', function (){
    return 'this is a post method';
});

Route::put('/put/{id}', function (){
    return 'this is a put method';
});

Route::patch('/patch/{id}', function (){
    return 'this is a patch method';
});

Route::delete('/delete/{id}', function (){
    return 'this si a delete method';
});

Route::middleware('method')->group(function(){
    Route::get('/pogi',[UserController::class, 'index']);
    Route::patch('/pogi/{id}',[UserController::class, 'update']);
    Route::post('/pogi',[UserController::class, 'store']);
    Route::put('/pogi/{id}',[UserController::class, 'update']);
    Route::delete('/pogi/{id}',[UserController::class, 'destroy']);
});

Route::apiResource('products', ProductController::class);
// Route::get('/products', [ProductController::class, 'index']);
// Route::post('/products', [ProductController::class, 'store']);
// Route::get('/products/{product}', [ProductController::class, 'show']);
// Route::put('/products/{product}', [ProductController::class, 'update']);
// Route::delete('/products/{product}', [ProductController::class, 'destroy']);