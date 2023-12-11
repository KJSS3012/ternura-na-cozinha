<?php

use App\Http\Controllers\RecipeController;
use App\Models\Category;
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
    $categories = Category::all();
    return view("welcome")->with("categories", $categories);
});
