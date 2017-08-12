@extends('layouts.master')


@section('content')


<div class="row">
<div class="col-8">

@foreach($games as $game)
<!--	<a href="/games/{{ $game->id }}">{{ $game->title }}</a>-->
<div class="card mt-1">
	<div class="card-block " >
		<a class="card-title" href="/games/{{ $game->id }}">{{ $game->title }}</a>
		<p class="card-text">Published By: {{ $game->publisher }}</p>
		<p class="small">Game submitted by user {{ $game->user->name }}</p>
		<a href="/games/{{ $game->id }}" class="btn btn-primary">Learn More</a>
	</div>
</div>



	
@endforeach
	</div>
	<div class="col-4">
		@include('partials.activeusers')
	</div>
</div>

@endsection