<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
// test micro un deux je suis pas un heros elias regard moi bien ier jai casser 6 bouches
route::get('/', function () {
    return view('welcome');
});
// route::get('/1', '\App\Http\Controllers\ViewController@hn');
// Route::middleware(['auth'])->group(function (){

// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';