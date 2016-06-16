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
		    'charactername' => 'required|alpha_num|max:200',
		    'age' => 'required|numeric',
		    'height' => 'required|numeric',
		    'weight' => 'required|numeric'
		]);


		$request->user()->ownCharacters()->create([
		    'name' => $request->charactername,
		    'age' => $request->age,
		    'height' => $request->height,
		    'weight' => $request->weight
		]);
		
		return redirect()->action('Profile\ProfileController@index');
	}

    public function add(Request $request){

    	return view('profile.character.form');
    }
}
