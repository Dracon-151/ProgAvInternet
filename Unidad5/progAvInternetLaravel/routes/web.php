<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('saludo', function () {
    echo "Hola";
});

Route::get('saludo/{name}', function ($name) {
    echo "Hola".$name;
});

Route::get('suma/{num1}/{num2}/{num3?}', function ($num1, $num2, $num3=0) {
    echo $num1 + $num2 + $num3;
})->where(['num1' => '[0-9]+', 'num2' => '[0-9]+', 'num3' => '[0-9]+']);

Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::post('users', [UserController::class, 'store'])->name('users.store');
Route::get('users/create', [UserController::class, 'create'])->name('users.create');
Route::get('users/{id}', [UserController::class, 'show'])->where(['id' => '[0-9]+'])->name('users.show');

Route::get('clients', [ClientController::class, 'index'])->name('clients.index');
Route::get('clients/{id}', [ClientController::class, 'show'])->where(['id' => '[0-9]+'])->name('clients.show');

Route::get('reservations', [ReservationController::class, 'index'])->name('reservations.index');
Route::get('reservations/{id}', [ReservationController::class, 'show'])->where(['id' => '[0-9]+'])->name('reservations.show');
