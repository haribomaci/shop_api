<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

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

Route::group(["middleware"=> ["auth:sanctum"]], function(){

    Route::post("/logout",[AuthController::class, "logout"]);
    
    Route::put("/product/{id}",[ProductController::class, "update"]);
    Route::post("/new-product", [ProductController::class, "create"]);
    Route::delete("/delete/{id}",[ProductController::class, "destroy"]);
});

Route::post("/register",[AuthController::class, "SignUp"]);
Route::post("/login",[AuthController::class, "SignIn"]);


Route::get("/products",[ProductController::class, "index"]);
Route::get("/product/{id}",[ProductController::class, "show"]);

