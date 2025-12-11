<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('livewire.auth.login');
})->name('login');


// Rotas protegidas
Route::middleware('auth')->group(function () {
    
    Route::get('/', function () {
        return view('app');   // sua página principal
    });
});