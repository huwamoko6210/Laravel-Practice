<?php

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

use App\Http\Middleware\HelloMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{id}', 'HelloController@index')->name('hello');

Route::middleware([HelloMiddleware::class])->group(function () {
    Route::get('/hello', 'HelloController@index');
    Route::get('/hello/other', 'HelloController@other');
});

Route::namespace('Sample')->group(function () {
    Route::get('/sample', 'SampleController@index');
    Route::get('/sample/other', 'SampleController@other');
});