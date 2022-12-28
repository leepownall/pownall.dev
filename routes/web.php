<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts;

Route::view('/', 'home');

Route::get('posts/{slug}', Posts\ViewController::class);
