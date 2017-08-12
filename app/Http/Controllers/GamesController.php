<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\User;

class GamesController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth')->except(['index', 'show']);
		//two methods to use middle except() and only()
	}
	
    public function index()
	{
//		$games = Game::all();
		$games = Game::latest()->get();
		return view('games.index', ['games' => $games]);
		
		
		
//		$activeusers = User::selectRaw('users.name, count(*)submitted_games')->join('games', 'games.user_id', '=', 'user_id')->groupBy('users.name')->orderBy('submitted_games', 'DESC')->get();
		//above whole query should be defined in  model App/User.php
		
//		$activeusers = User::activeusers();
//		return view('games.index', ['games' => $games, 'activeusers' => $activeusers]);
	}
	/*
	public function show($id)
	{
		$game = Game::find($id);
		return view('games.show', ['game' => $game]);
	}
	*/
	public function show(Game $game)
	{
		return view('games.show', ['game' => $game]);
		
//		$activeusers = User::activeusers();
//		return view('games.show', ['game' => $game, 'activeusers' => $activeusers]);
	}
	
	public function create()
	{
		return view('games.create');
	}
	/*
	public function store()
	{
		var_dump(request('title'));
		var_dump(request('publisher'));
		var_dump(request('releasedate'));
		var_dump(request('image'));
	}
	*/
	public function store()
	{
		$this->validate(request(),[
			'title' => 'required|unique:games',
			'publisher' => 'required',
			'releasedate' => 'required',
			'image' => 'required',
		]);
		
		$game = new Game;
		
		$game->title = request('title');
		$game->publisher = request('publisher');
		$game->releasedate = request('releasedate');
		$game->image = request()->file('image')->store('public/images');
		$game->user_id = auth()->id();
		$game->save();
		
		session()->flash('message', 'Nice Game Submission!');
        session()->flash('type', 'success');
		
		return redirect('/games');
	}
}
