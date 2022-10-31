<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');

Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('/logout', [\App\Http\Controllers\LoginController::class, 'signOut'])->name('logout');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/',  function () {
        return view('admin.pages.dashboard.dashboard');
    });
    Route::get('/dashboard', function () {
        return view('admin.pages.dashboard.dashboard');
    });

    Route::group(['prefix' => 'plans'], function () {
        Route::get('/', [App\Http\Controllers\PlanController::class, 'index'])->name('plans.index');
//        Route::post('/', [App\Http\Controllers\ActorController::class, 'index'])->name('actor.search');
//        Route::get('/add', [App\Http\Controllers\ActorController::class, 'create'])->name('actor.add');
//        Route::post('/add', [App\Http\Controllers\ActorController::class, 'store'])->name('actor.add');
//        Route::get('/edit/{id}', [App\Http\Controllers\ActorController::class, 'edit'])->name('actor.edit');
//        Route::post('/edit/{id}', [App\Http\Controllers\ActorController::class, 'update'])->name('actor.update');
//        Route::get('/delete/{id}', [App\Http\Controllers\ActorController::class, 'destroy'])->name('actor.delete');
    });

});

