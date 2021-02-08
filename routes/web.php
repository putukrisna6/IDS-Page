<?php

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
    return view('welcome');
});

// routes to various pages
Route::get('pages/hall', function () {
    return view('pages/hall');
});
Route::get('pages/blog', function () {
    return view('pages/blog');
});
Route::get('pages/staffs', function () {
    return view('pages/staffs');
});
Route::get('pages/contact', function () {
    return view('pages/contact');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'show'])->name('profile.show');
Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');

// Route::get('/h/create', [App\Http\Controllers\HonorsController::class, 'create']);
// Route::post('/h', [App\Http\Controllers\HonorsController::class, 'store']);

