<?php

use App\Http\Controllers\PreviousIntroductionsController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::get('previous-introductions', PreviousIntroductionsController::class)->name('previous-introductions');
