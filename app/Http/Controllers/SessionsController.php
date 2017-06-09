<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest', ['except' => 'destroy']); // guest filter
	}

    public function create()
    {
    	return view('sessions.create');
    }

    public function store()
    {
    	// Checkes user credentials & automatically sign ins
    	if (! auth()->attempt(request(['email', 'password'])) ) {
    		return back()->withErrors([
    				'message'=>'Please check your credentials and try again!'
    			]);
    	}

    	return redirect()->home();
    	/*$this->validate(request(), [
    			'email' => request('email'),
    			'password' => bcrypt(request('password'))
    		]);*/
    }

    public function destroy()
    {
    	auth()->logout();

    	return redirect()->home();
    }
}
