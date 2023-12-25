<?php

use App\Http\Controllers\RecipeController;
use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Support\Facades\Route;

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

Route::resource("/recipe", RecipeController::class);

Route::get('/', function () {
    return view("welcome")->with([
        "categories" => Category::all(),
        "recipes" => Recipe::all()
    ]);
});
