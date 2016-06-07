<?php

namespace App\Http\Controllers\Table;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Common\Utility;

class PostController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}


	public function write(Request $request,\App\Adventure $adventure){
		Utility::stripXSS();

		$this->validate($request, [
		    'message' => 'required|max:1000'
		]);

		
		$request->user()->posts()->create([
		    'message' => $request->message,
		    'adventure_id' => $adventure->id
		]);
		
		return redirect()->action('Table\AdventureController@show',[$adventure->id]);
	}

}
