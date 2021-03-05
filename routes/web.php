<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
|
|// Default route to documentation
|Route::get('/', function () {
|    return view('welcome');
|});
*/

// route to main site
Route::get('/', 'App\Http\Controllers\ViewController@index');

// route to test site at localhost/test
// only works if a test method is enabled
Route::get('/test', 'App\Http\Controllers\TestController@test');