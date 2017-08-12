<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/games/','GamesController@show');
});
/*
Route::get('hello', function(){
	return view('hello');
});

Route::get('games', function(){
	return view('games', ['games' => ['Castlevania', 'Galaga', 'Ghosts n Goblins']]);
});

Route::get('games', function () {
    $games = ['Balloon Fight', 'Donkey Kong', 'Excitebike'];
    return view('games')->with('games', $games);
});

Route::get('games', function () {
    $games = ['Balloon Fight', 'Donkey Kong', 'Excitebike'];
    return view('games', compact('games'));
});

Route::get('games', function () {
    $data['games'] = ['Balloon Fight', 'Donkey Kong', 'Excitebike'];
    $data['publishers'] = ['Konami', 'Nintendo', 'Bandai Namco'];
	$data['releasedates'] = ['1986', '1993', '1984'];
	return view('games', $data);
});


Route::get('games', function(){
	//$games = DB::table('games')->get();
	$games = DB::table('games')->where('releasedate','1990')->get();
	//view data in games.blade.php
	return view('games', ['games' => $games]);
	
	//Die and Dump The Output : this will dump all data from table in $games visit 54.dev/games to see output in browser
	//dd($games);
	
	//Render As JSON
	//return $games;
});

Route::get('games',function(){
	// latest() fetches all games and orders them by the most recently added to the database
	$games = DB::table('games')->latest()->get();
	return view('games.index',['games' => $games]);
});

Route::get('games/{id}', function($id){
	$game = DB::table('games')->find($id);
	return view('games.show', ['game' => $game]);
});

use App\Game;
Route::get('games', function(){
	//$games = App\Game::all();
	$games = Game::all();
	return view('games.index', ['games' => $games]);
});
Route::get('games/{id}', function($id){
	$game = Game::find($id);
	return view('games.show', ['game' => $game]);
});

use App\Game;
Route::get('games', function(){
	//$games = Game::where('id', '>', 3)->get();
	//$games = Game::where('title', 'like', '%Mega%')->get();
	//$games = Game::where('publisher', '=', 'Nintendo')->get();
	//$games = Game::where('releasedate', '=', 1989)->get();
	//$games = Game::orderBy('id', 'desc')->get();
	//$games = Game::orderBy('id', 'desc')->take(3)->get();
	//$games = Game::pluck('title');
	
	return $games;
});

use App\Game;
Route::get('/', function(){
	return Game::nintendo()->get();
});

use App\Game;
Route::get('/', function(){
	return Game::nintendo()
		->where('title', 'like', '%Mario%')
		->get();
});

use App\Game;
Route::get('games', function(){
	$games = Game::all();
	return view('games.index', ['games' => $games]);
});
Route::get('games/{id}', function($id){
	$game = Game::find($id);
	return view('games.show', ['game' => $game]);
});


Route::get('games', 'GamesController@index');
 
Route::get('games/create', 'GamesController@create');
 
Route::get('games/{id}', 'GamesController@show');
 
Route::post('games', 'GamesController@store');




Route::post('games/{game}/reviews', 'ReviewsController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

*/

//-- Games Resource --//
Route::get('/games', 'GamesController@index');
 
Route::get('/games/create', 'GamesController@create');
 
Route::post('/games', 'GamesController@store');
 
Route::get('/games/{game}', 'GamesController@show');
 
//-- Reviews Resource --//
Route::get('/reviews', 'ReviewsController@index');
 
Route::get('/reviews/{game}/create', 'ReviewsController@create');
 
Route::post('/games/{game}/reviews', 'ReviewsController@store');
 
Route::get('/reviews/{review}', 'ReviewsController@show');
 
//-- User Authentication and Session --//
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
 
Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy')->name('logout');


// emails
use App\Mail\Hello;
//Route::get('testemail', function(){
//	\Mail::to(['hello@yahoo.ca'])->send(new Hello);
//});
 
$user = \Auth::loginUsingId(1);
 
Route::get('testemail', function () use ($user)  {
    \Mail::to($user)->send(new Hello($user));
});




