<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
	
	public function reviews()
	{
		return $this->hasMany(Review::class)->orderBy('created_at', 'desc');
		//by above adding orderBy we can display reviews as whichever added first that will come first not last
	}
	
	public function user()
	{
		return $this->belongsTo(User::class);
	}
	
    public function scopeNintendo($query)
	{
		return $query->where('publisher', '=', 'Nintendo');
	}
	
	public function addReview($body, $userid)
	{
		$this->reviews()->create(['body' => $body, 'user_id' => $userid]);
	}
	
}
