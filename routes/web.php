<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
    $linksh = config('db.links');
    $linksf = config('db-bottom.bottom');
    return view('home', compact ('linksh'), compact ('linksf'));
})->name('home');
Route::get('/home', function () {
    $linksf = config('db-bottom.bottom');
    $linksh = config('db.links');
    return view('home', compact ('linksh'), compact ('linksf'));
})->name('home');

Route::get('/movies', [HomeController::class, 'index'])->name('movies');


Route::get('/about', function () {
    $linksf = config('db-bottom.bottom');
    $linksh = config('db.links');
    return view('about', compact ('linksh'), compact ('linksf'));
})->name('about');

