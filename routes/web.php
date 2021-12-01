<?php

use App\Models\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('/app')->as('app.')->group(function () {
    Route::get('/', function () {
        return view('app');
    })->name('dashboard');

    Route::prefix('/collections')->as('collections.')->group(function () {
        Route::get('/', function (Request $request) {
            // TODO: Replace with the user's collections in the future.
            return view('collections.index', [
                'collections' => Collection::all(),
            ]);
        })->name('index');

        Route::get('/create', function (Request $request) {
            return view('collections.create');
        })->name('create');

        Route::post('/', function (Request $request) {
            $request->validate([
                'name' => ['required', 'string'],
                'from_name' => ['required', 'string'],
                'from_email' => ['required', 'email:strict'],
            ]);

            dd($request->collect());
        })->name('store');
    });
});
