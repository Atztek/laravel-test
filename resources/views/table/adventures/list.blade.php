@extends('layouts.app')

@section('content')
	<a href="{{ action('Table\AdventureController@form')}}" class="btn btn-success">{{ Lang::get("table.adventures.add")}}</a>

	<div class="panel panel-default">
		<div class="panel-heading">{{ Lang::get("table.adventures.ownAdventures")}}</div>
		<div class="panel-body">
			@foreach ($adventures as $adventure)
				<div>
					<h3>
						<a href="{{ action('Table\AdventureController@show', [ $adventure->id] ) }}">
							{{ $adventure->name }}
						</a>
					</h3>
					<div>
						{!! @markdown($adventure->description) !!}
					</div>
					<a class="btn btn-primary" href="{{ action('Table\AdventureController@edit', [ $adventure->id] ) }}">
						{{ Lang::get("table.adventures.edit")}}
					</a>
					<form action="{{ action('Table\AdventureController@destroy', [ $adventure->id] ) }}" method="POST">
				      {{ csrf_field() }}
				      {{ method_field('DELETE') }}

				      <button class="btn btn-danger">{{ Lang::get("table.adventures.delete")}}</button>
				    </form>
				</div>
				<hr>
			@endforeach
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">{{ Lang::get("table.adventures.playAdventures")}}</div>
		<div class="panel-body">
			
		</div>
	</div>

	
@endsection