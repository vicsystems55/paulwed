<?php

use App\Http\Controllers\ReservationController;
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


Route::get('/gallery', function () {
    return view('gallery');
});


Route::get('/confirmed', function () {
    return view('confirmed');
});

Route::post('/reservation', [ReservationController::class, 'store']);

Route::get('/lists', [ReservationController::class, 'lists'])->middleware('auth');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/register', function ()
{
    # code...
    return redirect('/login');
});

