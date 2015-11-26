<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',[
    'uses'  => 'HomeController@index',
    'as'    => 'home'
]);
Route::get('about/',[
    'uses'  => 'HomeController@about',
    'as'    => 'about'
]);
Route::get('products/',[
    'uses'  => 'HomeController@products',
    'as'    => 'products'
]);
Route::get('services/',[
    'uses'  => 'HomeController@services',
    'as'    => 'services'
]);
Route::get('infrastructure/',[
    'uses'  => 'HomeController@infrastructure',
    'as'    => 'infrastructure'
]);
Route::get('contact/',[
    'uses'  => 'HomeController@contact',
    'as'    => 'contact'
]);
