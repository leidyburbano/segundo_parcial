<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\principal;
use App\Http\Controllers\libros;
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
Route::get('/', function () {
    return view('navegation');
});
*/

Route::get('/' , [principal::class, 'Index']);

Route::get('listado' , [libros::class, 'Index']);

Route::get('libros' , [libros::class, 'listado']);

