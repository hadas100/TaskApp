<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
// Route::get('/{any?}', [
//     function () {
//         return view('welcome');
//     }
// ])->where('any', '.*');

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('','App\Http\Controllers\Controller@index');
Route::get('/about','App\Http\Controllers\TaskController@about');
Route::get('/services','App\Http\Controllers\TaskController@services');
Auth::routes();

Route::resource('tasks','App\Http\Controllers\TasksController' );
// Route::get('tasks/{{id}}','App\Http\Controllers\TasksController' );
// Route::get('/', [TaskController::class, 'index']);
// Route::get('/about', function(){
//     return view('pages.about');
// });
// Route::get('/services', [TaskController::class, 'services']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
