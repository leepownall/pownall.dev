<?php

use App\Http\Controllers\Post;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::get('post/{post}', Post\ViewController::class);
Route::get('articles/{post}', Post\ViewController::class);
