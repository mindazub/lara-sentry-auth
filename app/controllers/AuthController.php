<?php

class AuthController extends \BaseController {

	public function getSignup(){
		return View::make('auth.signup');
	}

	public function postSignup(){
		
		try{
		$user= Sentry::getUserProvider()->create([
			'first_name'=>Input::get('first_name'),
			'last_name'=>Input::get('last_name'),
			'email'=>Input::get('email'),
			'password'=>Input::get('password'),
			]);
		}
		catch(Cartalyst\Sentry\User\UserExistsException $e){
			return Redirect::to('signup')->with('errors', 'User already exists!');
		}

		return View::make('home')->with('success', 'You are registered!');

	}

	public function getLogin(){
		return View::make('auth.login');
	}

	public function postLogin(){
		
		$credentials = [
		'email'=>Input::get('email'),
		'password'=>Input::get('password')
		];

		try {

			$user = Sentry::authenticate($credentials, false);


			//return Redirect::route('home')->with('success', 'Success!');
			var_dump($user->first_name);
			}catch(Cartalyst\Sentry\Users\LoginRequiredException $e){
				return Redirect::to('login')->with('errors', 'Login field is required!');
			}catch(Cartalyst\Sentry\Users\PasswordRequiredException $e){
				return Redirect::to('login')->with('errors', 'Password field is required!');
			}catch(Cartalyst\Sentry\Users\WrongPasswordException $e){
				return Redirect::to('login')->with('errors', 'The password is incorrect!');
			}catch(Cartalyst\Sentry\Users\UserNotFoundException $e){
				return Redirect::to('login')->with('errors', 'The user not found!');
			}catch(Cartalyst\Sentry\Users\UserNotActivatedException $e){
				return Redirect::to('login')->with('errors', 'The user is not activated!');
			}
	}

	public function logout(){
		Sentry::logout();
		return Redirect::to('home')->with('success', 'You were logged out!');
	}

}