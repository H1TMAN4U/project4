<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecipeController;
use App\Models\Ingredient;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IngredientController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/FullRecipeData/{id}',[RecipeController::class,"IDrecipe"]);
    
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/list',[RecipeController::class,'show']);
Route::get('/search',[RecipeController::class,"search"]);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/addrecipe',[RecipeController::class,'create'])->name('myrecipe.create');
    
    // Route::get('/myrecipes', [RecipeController::class, 'UserRecipes']);
    Route::get('/myrecipes', [RecipeController::class, 'UserRecipes']);

    // Route::get('delete/{id}', [RecipeController::class, 'delete']);
    // Route::get('Update/{id}', [RecipeController::class, 'ShowData']);
    // Route::POST('update', [RecipeController::class, 'update']);

    // Route::POST('add',[RecipeController::class, 'AddMyRecipe']);
    // Route::get("/search/ingredient",[IngredientController::class,'search']);
    Route::resource('/recipes', RecipeController::class);

});
require __DIR__.'/auth.php';
