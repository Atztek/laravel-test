@extends('layouts.app')

@section('content')

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
			<a href="{{ action('Table\AdventureController@edit', [ $adventure->id] ) }}">
				{{ Lang::get("table.adventures.edit")}}
			</a>
		</div>
	@endforeach


@endsection