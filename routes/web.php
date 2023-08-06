<?php

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
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("about", [PageController::class, 'about']);

Route::get('articles', [ArticleController::class, 'index'])
    ->name('articles.index');
Route::get('articles/create', 'ArticleController@create')
    ->name('articles.create');
Route::get('articles/{id}', [ArticleController::class, 'show'])
    ->name('articles.show');
Route::get('articles/{id}/edit', [ArticleController::class, 'edit'])
    ->name('articles.edit');
Route::post('articles', "ArticleController@store")
    ->name('articles.store');
Route::patch('articles/{id}', "ArticleController@update")
    ->name("articles.update");
Route::delete('articles/{id}', "ArticleController@destroy")
    ->name('articles.destroy');
