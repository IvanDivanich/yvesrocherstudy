<?php

use App\Livewire\Header;
use App\Livewire\MainPage;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('main.login');
})->name('login');

Route::get('/register', function () {
    return view('main.register-nl');
})->name('register-nl');

Route::get('/', function () {
    return view('main.main-page-nl');
})->name('main-page-nl');

Route::middleware(['auth'])->group(function () {

    Route::get('/study', function () {
        return view('study.study-nl');
    })->name('study-nl');

    Route::get('/profile', function () {
        return view('main.profile-nl');
    })->name('profile-nl');

    Route::get('/test/{testId}', \App\Livewire\TestComponent::class)->name('test.run');

});

