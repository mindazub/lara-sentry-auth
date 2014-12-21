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

Route::get('/', [
	'as'=>'home',
	'uses'=>'HomeController@home',
	]);


Route::get('signup', [
	'as'=>'signup_form',
	'uses'=>'AuthController@getSignup',
	]);

Route::post('signup', [
	'as'=>'signup_form_post',
	'uses'=>'AuthController@postSignup',
	]);

Route::get('login', [
	'as'=>'getLogin',
	'uses'=>'AuthController@getLogin',
	]);

Route::post('login', [
	'as'=>'getLogin',
	'uses'=>'AuthController@postLogin',
	]);

Route::get('logout', [
	'as'=>'logout',
	'uses'=>'AuthController@logout',
	]);	



// Route::get('create_user', function(){
// 	$user = Sentry::getUserProvider()->create([
// 		'email'=>'admin@admin.com',
// 		'password'=>'password',
// 		'first_name'=>'Mind',
// 		'last_name'=>'Azub',
// 		'activated'=>1,
// 		'permissions'=>['admin'=> 1],
// 		]);
// 		var_dump($user);
