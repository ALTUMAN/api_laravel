<?php

use Illuminate\Support\Facades\Route;
use Auth\VerificationController\Auht;
use App\Models\Articulo;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/secret-info', function () {
    return view('info');
})->middleware(['auth', 'verified','password.confirm'])->name('info');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','password.confirm'])->name('dashboard');

//Auth::routes(['verify' => true]);

Route::post('email/verification-notification', [EmailVerificationController::class, 'sendVerificationEmail'])->middleware('auth:sanctum');

Route::get('/list', function (){
    $articulos = Articulo::all();
    return view('list');
});
require __DIR__.'/auth.php';


