<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomepageController;
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
    return view('welcome');
});

Route::get('/home/{name?}', [HomeController::class, 'index'])->name('home.index');

Route::get('/homepage', [HomepageController::class, 'index'])->name('homepage.index');

Route::get('/posts', [ClientController::class, 'getPosts'])->name('client.getposts');

Route::get('/posts/{id}', [ClientController::class, 'getPostbyId'])->name('client.getpostbyid');

Route::get('/addpost', [ClientController::class, 'addPost'])->name('client.addpost');

Route::get('/updatepost/{id}', [ClientController::class, 'updatePost'])->name('client.updatepost');

Route::get('/getproperty/{id}', [ClientController::class, 'getProperty'])->name('client.getproperty');
