<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['message','adventure_id'];

    public function user()
  	{
    	return $this->belongsTo(User::class);
  	}

  	public function adventure()
  	{
    	return $this->belongsTo(Adventure::class);
  	}

}
