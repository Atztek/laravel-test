<?php

namespace App\Http\Controllers\Table;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Common\Utility;


class AdventureController extends Controller
{
    public function __construct()
	{
	    $this->middleware('auth');
	}

	public function index(Request $request)
	{
		$adventures = \App\Adventure::get();
		return view('table.adventures.list',[
		    'adventures' => $adventures,
		]);
	}

	public function write(Request $request){
		Utility::stripXSS();

		$this->validate($request, [
		    'description' => 'required|max:1000|min:4',
		    'name' => 'required|max:255|min:4',
		]);

		$request->user()->ownAdventures()->create([
		    'name' => $request->name,
		    'description' => $request->description,
		]);

		return redirect('/adventures');
	}

	public function update(Request $request,\App\Adventure $adventure){
		Utility::stripXSS();
		
		$this->validate($request, [
		    'description' => 'required|max:1000|min:4',
		    'name' => 'required|max:255|min:4',
		]);

		$adventure->name = $request->name;
		$adventure->description = $request->description;
		$adventure->save();

		return redirect('/adventures');
	}

	public function form(Request $request)
	{
		//$adventures = \App\Adventure::get();
		return view('table.adventures.form');
	}

	public function edit(Request $request,\App\Adventure $adventure)
	{
		//print_r();

		return view('table.adventures.form',[
			"adventure" =>$adventure ,
		]);
	}

}
