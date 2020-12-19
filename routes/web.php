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

Route::get('/', function () {
    return view('top');
});

Route::get('/login', 'authController@login_form');
Route::post('/login', 'authController@login');

Route::get('/signup/pre', 'authController@pre_signup');
Route::post('/signup/mail', 'authController@send_mail');

Route::get('/signup/register', 'authController@register');
Route::post('/signup/register', 'authController@register_done');

Route::get('/logout', 'authController@logout');
Route::get('/path', 'mainController@path');

Route::get('/local', 'LocalController@top');
Route::get('/local/post', 'LocalController@post_form');
Route::post('/local/post', 'LocalController@post');

Route::get('/local/detail/{id}', 'LocalController@detail');
Route::get('/local/answer','LocalController@answer_form');
Route::post('/local/answer','LocalController@answer');
