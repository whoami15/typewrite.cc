<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('/app')->as('app.')->group(function () {
    Route::get('/', function () {
        return view('app');
    })->name('dashboard');

    Route::prefix('/lists')->as('lists.')->group(function () {
        Route::get('/', function (Request $request) {
            return view('lists.index');
        })->name('index');
    });
});
