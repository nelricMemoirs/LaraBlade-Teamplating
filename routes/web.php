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

/*
|--------------------------------------------------------------------------
|   Tugas    Blade Templating    AdminLTE    Table    Data-Table
|--------------------------------------------------------------------------

*/

Route::get('/', function () {
    $table_title = 'Tabel Pertama';
    $table_title2 = 'data-table';
    $type = 'layout.card';
    $table_1 = 'contentpage.table';
    return view('master.master_table', compact('table_title', 'table_title2', 'type', 'table_1'));
});

Route::get('/data-table', function () {
    $table_title = 'Data Table';
    $table_title2 = 'Table Pertama';
    $type = 'contentpage.datatable';
    return view('master.master_data_table', compact('table_title', 'type', 'table_title2'));
});

// Route::get('/register', function () {
//     return view('HTML.form');
// });

// Route::get('/welcome', function () {
//     return view('HTML.welcome');
// });

/*
|--------------------------------------------------------------------------
| History   Tugas    MVC
|--------------------------------------------------------------------------

*/

// Route::get('/', 'HomeController@home');
// Route::get('/register', 'AuthController@register');
// Route::post('/welcome', 'AuthController@welcome');
