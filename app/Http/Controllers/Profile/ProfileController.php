<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function __construct()
	{
	    $this->middleware('auth');
	}

	public function index(Request $request)
	{
		return view('profile.profile',[
			'user'=>$request->user()
		]);
	}

}
