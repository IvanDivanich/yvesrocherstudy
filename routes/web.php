<?php

use App\Livewire\Header; // Добавьте импорт для Livewire компонента Header
use App\Livewire\MainPage; // Добавьте импорт для Livewire компонента MainPage
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main.main-page-nl'); // Правильно!  Предполагается, что файл находится в resources/views/main/main-page-nl.blade.php
})->name('main-page-nl');

Route::get('/study', function () {
    return view('study.study-nl'); // Правильно!  Предполагается, что файл находится в resources/views/main/main-page-nl.blade.php
})->name('study-nl');

Route::get('/profile', function () {
    return view('main.profile-nl'); // Правильно!  Предполагается, что файл находится в resources/views/main/main-page-nl.blade.php
})->name('profile-nl');

Route::get('/login', function () {
    return view('main.login-nl'); // Правильно!  Предполагается, что файл находится в resources/views/main/main-page-nl.blade.php
})->name('login-nl');

Route::get('/register', function () {
    return view('main.register-nl'); // Правильно!  Предполагается, что файл находится в resources/views/main/main-page-nl.blade.php
})->name('register-nl');