<?php

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\UserController;
use App\Models\Product;
//use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your applicat :ion. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin', function () {

    if (! Gate::allows('access-admin')) {
        return 'Accès Refusé.';
    }

    return view('layouts.admin');
});

Route::get('/', function () {
    return view('accueil');
});

Route::post('/login', function () {
    return view('login');
});

Route::post('/register', function () {
    return view('register');
});


Route::post('/forgot-password', function () {
    return view('forgot-password');
});

Route::get('/panier', function () {
    return view('panier');
});

Route::resource('Product', 'ProductController');

Route::resource('product', ProductController::class);

//Route::create('product/create', 'ProductController@create');

Route::get('/login', 'App\Http\Controllers\Auth\ConfirmablePasswordController@show')->middleware('password.confirm');

//Route::match(['get', 'post'], 'deleteProduct/{id}', 'ProductController@deleteProduct');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
