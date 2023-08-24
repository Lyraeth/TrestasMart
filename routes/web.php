<?php

use App\Http\Controllers\Items\ItemsController;
use App\Http\Controllers\Items\ItemsStoreController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Items
Route::get('/items', ItemsController::class)->name('items.index');
Route::get('/additems', [ItemsController::class, 'add'])->name('items.partials.add-items');
Route::post('items', ItemsStoreController::class)->name('items.store');