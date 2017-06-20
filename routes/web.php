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
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'dashboard'], function ()
{
  Route::get('/', 'HomeController@index')->name('dashboard');
  Route::resource('perfil', 'profileController', ['names'=> 'profiles']);
});

Route::group(['prefix' => 'config', 'middleware' => 'auth', 'namespace' => 'Config'], function ()
{
  Route::resource('geral', 'GeneralConfigController', ['names'=> 'general']);
  Route::resource('arquivos', 'StorageConfigController', ['names'=> 'storage']);
  Route::resource('mail', 'MailConfigController', ['names'=> 'mail']);
});


Route::resource('media', 'MediaController');