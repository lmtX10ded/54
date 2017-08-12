<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//new added start from here
use App\Game;
use App\Review;
use App\User;

class ReviewsController extends Controller
{
	
	public function __construct()
	{
		$this->middleware('auth')->except(['index', 'show']);
	}
	
	public function index()
	{
		$reviews = Review::latest()->get();
		return view('reviews.index', ['reviews' => $reviews]);
		
//		 $activeusers = User::selectRaw('users.name, count(*) submitted_games')
//            ->join('games', 'games.user_id', '=', 'users.id')
//            ->groupBy('users.name')
//            ->orderBy('submitted_games', 'DESC')
//            ->get();
		//Above query went to App/User.php
		
//        $activeusers = User::activeusers();
//        return view('reviews.index', ['reviews' => $reviews, 'activeusers' => $activeusers]);
		
		
	}
	
	public function create(Game $game)
	{
		return view('reviews.create', ['game' => $game]);
	}
	
    public function store(Game $game)
	{
		$this->validate(request(), [
			'body' => 'required|min:3'
		]);
		
//		Review::create([
//			'body' => request('body'),
//			'game_id' => $game->id
//		]);
		
//		$game->addReview(request('body'));
		$game->addReview(request('body'), auth()->id());
		//Above addReview is in model App/Game.php
		//return back(); This will redirect to you right bach where you submitted your form
		//
		return redirect()->to('/games/' . request()->route()->game->id);
	}
	
	public function show(Review $review)
	{
		return view('reviews.show', ['review' => $review]);
	}
	
}
