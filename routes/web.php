<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VocabularController;

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

Route::get('/', [VocabularController::class, 'index'])
    ->name('dashboard')
    ->middleware('guest');

Route::get('/vocabulary/trening', [VocabularController::class, 'trening'])
    ->name('vocabulary.trening');

Route::post('/vocabulary/{id}/check', [VocabularController::class, 'check_word'])
    ->name('vocabulary.check-word');

Route::resource('vocabulary', VocabularController::class);     

require __DIR__.'/auth.php';
