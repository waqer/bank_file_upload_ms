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
    return view('index');
});

Route::get('/data', 'TestController@test');
// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
Route::post('/login', 'Authentication\LoginController@index')->name('login');
Route::resource('Admin','Admin\AdministratorController'); 
Route::resource('bank','Bank\BankinfoController'); 
Route::resource('bankcontactperson','Bank\BankcontacpersonController');
Route::resource('bankcontactpersonchild','Bank\bankcontactpersonchildController');
Route::resource('bankcontactpersonchild','Bank\bankcontactpersonchildController');
Route::resource('fileupload','Bank\fileuploadController');


