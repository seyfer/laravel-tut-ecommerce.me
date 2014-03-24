<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

Route::pattern('id', '[0-9]+');

//array('before' => 'auth')
//Route::group(array(), function() {
//    Route::get('/', array("as" => "newSnippet", "uses" => "SnippetsController@create"));
//    Route::get('new', array("as" => "newSnippet", "uses" => "SnippetsController@create"));
//});
//
//короче
Route::resource('/', 'SnippetsController');
Route::get('/', array("as" => "newSnippet", "uses" => "SnippetsController@create"));
Route::get('/{id}', array("as" => "showSnippet", "uses" => "SnippetsController@show"));

Route::controller("admin/categories", 'CategoriesController');


