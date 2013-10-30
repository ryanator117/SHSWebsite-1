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

// filler routes for now
// Route::get('/academics/accreditation', function()
// {
// 	return View::make('index');
// });

// // Filler routes for now
// Route::get('/academics/', function()
// {
// 	return View::make('index');
// });