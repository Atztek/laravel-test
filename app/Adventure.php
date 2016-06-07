<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adventure extends Model
{
    protected $fillable = ['name','description'];

    public function create_user()
  	{
    	return $this->belongsTo(User::class);
  	}

  	public function players(){
  		//$this->hasMany(User::class);
  	}  	

  	public function posts(){
  		return $this->hasMany(Post::class);
  	}

}
