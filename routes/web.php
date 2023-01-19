<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\HttpController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\uploadController;
use App\Http\Controllers\userTableController;
use App\Http\Controllers\woningdbController;
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
    return view('testLayout');
});

Route::get('/home/{name?}', [HomeController::class, 'index'])->name('home.index');

Route::get('/homepage', [HomepageController::class, 'index'])->name('homepage.index');

Route::get('/posts', [ClientController::class, 'getPosts'])->name('client.getposts');

Route::get('/posts/{id}', [ClientController::class, 'getPostbyId'])->name('client.getpostbyid');

Route::get('/addpost', [ClientController::class, 'addPost'])->name('client.addpost');

Route::get('/updatepost/{id}', [ClientController::class, 'updatePost'])->name('client.updatepost');

Route::get('/getproperty/{id}', [ClientController::class, 'getProperty'])->name('client.getproperty');

Route::get('/fluent', [FluentController::class, 'index'])->name('fluent-index');

Route::get('/http', [HttpController::class, 'index'])->name('http-index');

Route::get('/login', [LoginController::class, 'index'])->name('login-index')->middleware('checkuser');
Route::post('/login', [LoginController::class, 'submit'])->name('login-submit');

Route::get('/session/get', [SessionController::class, 'getSession'])->name('session-get');
Route::get('/session/set', [SessionController::class, 'setSession'])->name('session-set');
Route::get('/session/remove', [SessionController::class, 'removeSession'])->name('session-remove');

Route::get('/woning/{id?}', [woningdbController::class, 'getWoning'])->name('woning-getwoning');
Route::get('/crud-woning', [woningdbController::class, 'addWoning'])->name('woning-addwoning');
Route::post('/crud-woning', [woningdbController::class, 'addWoningpost'])->name('woning-addwoningpost');
Route::get('/woning/delete/{id}', [woningdbController::class, 'deleteWoning'])->name('woning-deletewoning');

Route::get('/woning/update/{id}', [woningdbController::class, 'updateWoning'])->name('woning-updatewoning');
Route::post('/woning/update', [woningdbController::class, 'updateWoningPost'])->name('woning-updatewoningpost');

Route::get('/woning-model', [woningdbController::class, 'getAllWoningen'])->name('woning-getallwoningen');

Route::get('test-blade', function () {
    return view('testblade');
});

Route::get('/test-layout', function () {
    return view('testlayout');
});

Route::get('/users', [userTableController::class, 'getAllusers'])->name('users-getallusers');

Route::get('/upload', [uploadController::class, 'upload'])->name('upload-upload');
Route::post('/upload', [uploadController::class, 'uploadPOST'])->name('upload-uploadpost');