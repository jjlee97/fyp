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

Route::get('/', function () {
    return view('login');
});
Route::get('/index', function() {
    return view('index');
});
Route::get('/blank', function() {
    return view('blank');
});
//testing on resource 
Route::resource('/post', 'PostController');
Route::group(['middleware' => ['web']], function() {
    //
});