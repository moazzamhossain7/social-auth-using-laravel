<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Socialite;
use App\User;
use Session;
use Auth;

class AuthController extends Controller
{
	public function index()
	{
		return view('login');
	}

	public function authenticate(AuthRequest $request)
	{
		// User::create([
		// 	'email'    => $request->email,
		// 	'password' => bcrypt($request->password)
		// ]);
		$credentials = ['email' => $request->email, 'password' => $request->password];

		if(Auth::guard('user')->attempt($credentials)) {
			Session::put('user', Auth::guard('user')->user());

			Session::flash('success', 'Your authentication attempt is successful');
			return redirect('/dashboard');
		}
		Session::flash('error', 'Your input credentials was wrong!');
		return redirect('/');
	}

	public function dashboard()
	{
		return response()->json([
			'success' => true,
			'message' => 'Authentication successful',
			'user'    => Session::get('user')
		]);
	}

	public function signOut()
	{
		Session::forget('user');

		Session::flash('success', 'You are successfully logout');
		return redirect('/');
	}

	public function redirectToProvider($provider)
	{
		return Socialite::driver($provider)->redirect();
	}

	public function providerCallback($provider)
	{
		$user = Socialite::driver($provider)->user();

        // return $user->token;
        return response()->json([
        	'success'   => true,
        	'message'   => 'Your authentication attempt is successful',
        	'token'     => $user->token,
        	'username'  => $user->nickname,
        	'full_name' => $user->name,
        	'email' 	=> $user->email,
        	'user' 		=> $user
        	// 'location' 	=> $user->user['location'],
        	// 'bio' 		=> $user->user['bio']
        ]);
	}

}