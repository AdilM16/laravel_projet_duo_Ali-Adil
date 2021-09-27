<?php

use App\Models\Bookmenu;
use App\Models\Booktable;
use App\Models\Chef;
use App\Models\Footer;
use App\Models\Header;
use App\Models\Nav;
use App\Models\Testimonial;
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
    $data1 = Nav::all();
    $data2 = Header::all();
    $data3 = Bookmenu::all();
    $data4 = Chef::all();
    $data5 = Testimonial::all();
    $data6 = Booktable::all();
    $data7 = Footer::all();
    
    return view('pages.home',compact('data1','data2','data3','data4','data5','data6','data7'));
});
// route::get('/1', '\App\Http\Controllers\ViewController@hn');
// Route::middleware(['auth'])->group(function (){

// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

<<<<<<< HEAD
require __DIR__.'/auth.php';


Route::resource('backofficenav', NavController::class);

Route::resource('backofficeheader', HeaderController::class);

Route::resource('backofficebookmenu', BookmenuController::class);

Route::resource('backofficechef', ChefController::class);

Route::resource('backofficetestimonial', TestimonialController::class);

Route::resource('backofficebooktable', BooktableController::class);

Route::resource('backofficefooter', FooterController::class);
=======
require __DIR__.'/auth.php';
>>>>>>> 1b098298101bdd61d12631e5e24c267b8310dd1d
