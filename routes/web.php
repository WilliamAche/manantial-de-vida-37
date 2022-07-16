<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', 'HomeController@index')->name('home');

// Terminos
Route::get('term',function (){return view('term');})->name('term');

Auth::routes();

// Estar logueado obligatoriamente
Route::prefix('dashboard')->middleware('auth')->group(function () {

    Route::get('/home', 'HomeController@index')->name('home');

    // las rutas que tengan el middleware de checkrole son rutas que solo el usuario con el role_id 1 puede usar

    // users 
    Route::get('/profile', 'UserController@profile')->name('profile')->middleware('checkrole');
    Route::get('/users/list', 'UserController@index')->name('user.list')->middleware('checkrole');
    Route::post('/users/update/{id}', 'UserController@update')->name('user.update');
    Route::delete('/users/delete/{id}', 'UserController@delete')->name('user.delete')->middleware('checkrole');
    Route::post('/users/status/{id}', 'UserController@status')->name('user.status')->middleware('checkrole');

    // professional 
    Route::get('/professional/list', 'ProfessionalController@index')->name('professional.list')->middleware('checkrole');
    Route::post('/professional/store', 'ProfessionalController@store')->name('professional.store')->middleware('checkrole');
    Route::post('/professional/update/{id}', 'ProfessionalController@update')->name('professional.update')->middleware('checkrole');
    Route::post('/professional/status/{id}', 'ProfessionalController@status')->name('professional.status')->middleware('checkrole');
    Route::delete('/professional/delete/{id}', 'ProfessionalController@delete')->name('professional.delete')->middleware('checkrole');
    Route::get('/professional/order/{id}', 'Ci\ProfessionalController@Order')->name('professional.order')->middleware('checkrole');
    
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
