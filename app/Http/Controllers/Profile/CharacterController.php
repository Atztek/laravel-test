<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CharacterController extends Controller
{
	public function __construct()
	{
	    $this->middleware('auth');
	}

	public function write(Request $request){
		Utility::stripXSS();
		$this->validate($request, [
		    'message' => 'required|max:1000'
		]);
		
	}

    public function add(Request $request){

    	return view('profile.character.form');
    }
}
