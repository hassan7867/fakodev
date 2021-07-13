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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::get('/what-we-do', function () {
    return view('what-we-do');
});
Route::get('/get-involved', function () {
    return view('get-involved');
});
Route::get('/projects', function () {
    return view('projects');
});
Route::get('/updates', function () {
    return view('updates');
});
Route::get('/completed-projects', function () {
    return view('completed-projects');
});
Route::get('/projects-in-pipeline', function () {
    return view('projects-in-pipeline');
});
Route::get('/support-us', function () {
    return view('support-us');
});
Route::get('/meet-our-team', function () {
    return view('meet-our-team');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::post('/send-message', "AuthController@sendMessage");

