<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//start from here
use App\User;
use App\Mail\Hello;

class RegistrationController extends Controller
{
	
	public function __construct()
	{
		$this->middleware('guest');
	}
    
	public function create()
	{
		return view('registration.create');
	}
	
	public function store()
	{
		$this->validate(request(), [
			'name' => 'required',
			'email' => 'required|email',
			'password' => 'required',
			'password' => 'required|confirmed'
		]);
		
		$user = User::create(request(['name', 'email', 'password']));
		
		auth()->login($user);
		
		session()->flash('message', '<b>Hi there!</b> Thanks for signing up!');
        session()->flash('type', 'success');
		
		\Mail::to($user)->send(new Hello($user));
		
		return redirect()->to('/games');
	}
}
