@extends('layouts.app')

@section('content')

<div class="row">
	<div class='col-xs-4'>
	
		<div class="panel panel-default">
			<div class="panel-heading">{{ Lang::get("profile.profile.user_info") }}</div>
			<div class="panel-body">
		    	<div>{{ $user->email }}</div>
		    	<div>{{ $user->name }}</div>
		  	</div>
		</div>

	</div>
	<div class='col-xs-8'>
		<div class="panel panel-info">
			<div class="panel-heading">{{ Lang::get("profile.profile.user_characters") }}</div>
		  	<table class="table">
	    		<tr>
	    			<td></td>
	    			<td></td>
	    		</tr>
	    		<tr>
	    			<td></td>
	    			<td></td>
	    		</tr>
	    	</table>
		  	<div class="panel-footer">
		  		<a href="{{ action('Profile\CharacterController@add') }}" class="btn btn-primary">
		  			{{ Lang::get("profile.profile.add_character") }}
		  		</a>
		  	</div>
		</div>
	</div>
</div>

@endsection