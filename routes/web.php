<?php
use App\Controllers\UserController;
use App\Routes\Route;

error_reporting(E_ALL);
ini_set('display_errors', 1);

Route::get('/user/accueil', 'UserController@index');
Route::get('/user/accueil/create', 'UserController@create');
Route::post('/user/accueil/create', 'UserController@store');

Route::get('/user/accueil/login', 'AuthController@index'); //index c'est la page login
Route::post('/user/accueil/login', 'AuthController@store');
Route::get('/user/accueil/logout', 'AuthController@delete'); 

Route::get('/user/profil', 'ProfilController@index');

Route::get('/user/timbre/create', 'TimbreController@create');
Route::post('/user/timbre/create', 'TimbreController@store');

Route::get('/user/catalogue', 'CatalogueController@index');
Route::post('/user/catalogue', 'CatalogueController@index');

Route::get('/user/catalogue/show', 'TimbreController@show');
Route::post('/user/catalogue/show', 'ProfilController@store');

Route::get('/timbre/edit', 'TimbreController@edit');
Route::post('/timbre/edit', 'TimbreController@update');





Route::dispatch();


