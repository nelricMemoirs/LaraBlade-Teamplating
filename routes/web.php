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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('HTML.index');
// });

// Route::get('/register', function () {
//     return view('HTML.form');
// });

// Route::get('/welcome', function () {
//     return view('HTML.welcome');
// });

Route::get('/', 'HomeController@home');
Route::get('/register', 'AuthController@register');
Route::post('/welcome', 'AuthController@welcome');
