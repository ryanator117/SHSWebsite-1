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

Route::get('/', function()
{
	return View::make('index');
});
Route::get('/index', function()
{
	return View::make('index');
});

Route::get('/faculty', function()
{
	return View::make('faculty');
});

Route::get('/lunch_menu'), function()
{
	return View::make('lunchmenu');
});

Route::get('/counselors'), function()
{
	return View::make('counselors.index');
});

// vv Handle requests for pages of specific counselors
Route::get('/counselors/{name}', function($name)
{
	return View::make('counselors.'.$name);
})->where('name', '[A-Za-z]+');