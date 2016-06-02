<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class PostController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function index(Request $request)
	{
		$posts = \App\Post::get();
		return view('posts', [
		    'posts' => $posts,
		]);
	}

	public function write(Request $request){
		$this->validate($request, [
		    'message' => 'required|max:1000'
		]);

		$request->user()->posts()->create([
		    'message' => $request->message,
		]);

		return redirect('/posts');
	}

}
