<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InterestedUserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/interesse', [InterestedUserController::class, 'create'])->name('interest.create');
Route::post('/interesse', [InterestedUserController::class, 'store'])->name('interest.store');