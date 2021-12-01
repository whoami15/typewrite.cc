<?php

use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('/app')->as('app.')->group(function () {
    Route::get('/', function () {
        return view('app');
    })->name('dashboard');

    Route::prefix('/groups')->as('groups.')->group(function () {
        Route::get('/', function (Request $request) {
            // TODO: Replace with the user's groups in the future.
            return view('groups.index', [
                'groups' => Group::all(),
            ]);
        })->name('index');

        Route::get('/create', function (Request $request) {
            return view('groups.create');
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
