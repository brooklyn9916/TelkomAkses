<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
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
    return view('auth.login',[
        "title" => "Login"
    ]);
});

Route::get('/home', function () {
    return view('index',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About"
    ]);
});

Route::get('/gallery', function () {
    return view('gallery',[
        "title" => "Gallery"
    ]);
});

Route::get('/form', function () {
    return view('form',[
        "title" => "Formulir Registrasi"
    ]);
});

Route::resource('/form', FormController::class);

Route::get('/form', [FormController::class,'Formupload']);

Route::post('/form', [FormController::class, 'FormFile'])->name('form.formfile');

Auth::routes();

Route::group(['middleware'=>['auth']], function(){
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
