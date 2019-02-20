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
use App\Jobs\SomeJob;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs/{jobs}', function ($job) {
    for($i=0; $i<$job; $i++) {
        SomeJob::dispatch();
    }
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
