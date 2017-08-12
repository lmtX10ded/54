@extends( 'layouts.master' )

@section( 'content' )
<div class="row">
<div class="col-8">
<div class="card w-50 m-1">
	<!--        <img class="card-img-top" src="/{{ $game->title }}.png" alt="Card image cap">-->
	<img class="card-img-top" src="{{ Storage::url($game->image) }}" alt="Card image cap">
	<div class="card-block">
		<h3 class="card-title">{{ $game->title }}</h3>
		<p class="card-text">{{ $game->title }} is published by {{ $game->publisher }}</p>
		<p class="small">Game submitted by user {{ $game->user->name }}</p>
		<a href="/games" class="btn btn-primary">List Games</a>
	</div>
</div>
</div>
<div class="col-4">
	@include('partials.activeusers')
</div>
</div>

<div class="reviews">
	<hr>
	<h4>What Gamers Are Saying</h4>
	<ul class="list-group">
		@foreach($game->reviews as $review)
		<li class="list-group-item">{{ $review->body }}
			<hr>
			<small class="text-primary"><a href="/reviews/{{ $review->id }}">posted {{$review->created_at->diffForHumans()}} by user {{ $review->user->name }}</a></small>
		</li>
		@endforeach
	</ul>
</div>

<!--@if( auth()->check() )-->
<!--<div class="card-block">-->
<!--	<form method="post" action="/games/{{ $game->id }}/reviews">-->
<!--		{{ csrf_field() }}-->
<!--		<div class="form-group">-->
<!--			<textarea name="body" class="form-control" placeholder="Add a review"></textarea>-->
<!--		</div>-->
<!--		<div class="form-group">-->
<!--			<button type="submit" class="btn btn-primary">Add a review</button>-->
<!--		</div>-->
<!--		@include('partials.formerrors')-->
<!--	</form>-->
<!--</div>-->
<!--@endif-->

<ul class="list-group mt-2">
	<li class="list-group-item list-group-flush">

		<a href="/reviews/{{ $game->id }}/create">Add a review!</a>
		<hr>
	</li>
</ul>
@endsection