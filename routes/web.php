<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', PageController::class)->name('home');

Route::view('/', 'home');
Route::view('/designs', 'designs');
Route::view('/websites', 'websites');
Route::view('/puzzle', 'puzzle');
Route::view('/nietvindbareurl', 'winnaar');
Route::view('/noelements', 'noelements');
// Route::view('/stage', 'stage');
Route::get('/stage', [PageController::class, 'stage']);
Route::post('/stage', [PageController::class, 'PostStage']);
Route::get('/contact', [PageController::class, 'contact']);
Route::post('/contact', [PageController::class, 'PostContact']);