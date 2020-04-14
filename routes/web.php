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

Route::get('/', 'LandingPage@display');

Route::get('/projects', 'projects\ProjectsPage@display');

Route::get('/projects/login', 'projects\LoginController@display');
Route::post('/projects/login', 'projects\LoginController@login')
     ->name('login');

Route::get('/projects/register', 'projects\RegisterController@display');
Route::post('/projects/register', 'projects\RegisterController@register')
     ->name('register');

Route::get('/projects/users/{id}', 'projects\UserController@layout')
     ->where('id', '[0-9]+')
     ->name('user')
     ->middleware('auth');
