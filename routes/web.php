<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard.home');
});

Route::prefix('dashboard')->group(function () {
    Route::get('/home', function () {
        return view('dashboard_layout.homepage');
    })->name('dashboard.home');

    Route::get('/chat', function () {
        return view('dashboard_layout.chat');
    })->name('dashboard.chat');

    Route::get('/calendar', function () {
        return view('dashboard_layout.calendar');
    })->name('dashboard.calendar');

    Route::get('/online-classes', function () {
        return view('dashboard_layout.online_classes');
    })->name('dashboard.online_classes');

    Route::get('/logout', function () {
        return view('dashboard_layout.logout');
    })->name('dashboard.logout');

    Route::post('/logout', function () {
        return redirect()->route('dashboard.home')->with('status', 'Logged out');
    })->name('dashboard.logout.action');
});