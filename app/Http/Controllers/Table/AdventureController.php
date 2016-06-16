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
		$adventures = $request->user()->ownAdventures()->get();
		return view('table.adventures.list',[
		    'adventures' => $adventures,
		]);
	}

	public function show(Request $request,\App\Adventure $adventure){
		$posts = $adventure->posts()->paginate(20);		

		return view('table.adventures.adventure',[
			"adventure" =>$adventure ,
			"posts" => $posts
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

		return redirect()->action('Table\AdventureController@index');
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

		return redirect()->action('Table\AdventureController@index');
	}

	public function destroy(Request $request,\App\Adventure $adventure){
		$this->authorize('destroy', $adventure);
		$adventure->delete();

    	return redirect()->action('Table\AdventureController@index');	
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
