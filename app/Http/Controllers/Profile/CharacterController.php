<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Common\Utility;

class CharacterController extends Controller
{
	public function __construct()
	{
	    $this->middleware('auth');
	}

	public function write(Request $request){
		Utility::stripXSS();
		$this->validate($request, [
		    'charactername' => 'required|max:200'
		]);
		
	}

    public function add(Request $request){

    	return view('profile.character.form');
    }
}
