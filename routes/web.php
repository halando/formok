<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PubController;
use App\Http\Controllers\PetsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/drink", [PubController::class, "getDrink"]);
Route::post("/submit-drink",[PubController::class, "subDrink"]);
Route::post("/new-drink",[PubController::class, "newDrink"]);
Route::post("/add-drink",[PubController::class, "addDrink"]);
Route::post("/manual",[PubController::class,"manual"]);

