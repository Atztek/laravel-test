@extends('layouts.app')

@section('content')
<div class="panel panel-default">
	<div class="panel-heading"> @lang('table.adventures.new')</div>
  	<div class="panel-body">

  			
		@include('common.errors')
		{{ Form::model($adventure, array('action' => array('Table\AdventureController@update', $adventure->id))) }}
		{{-- Form::open(array('url' => '/adventure/add')) --}}

		    <div class="form-group">
		        {{ Form::label('name', Lang::get('table.adventures.form.name') ) }}
		        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
		    </div>			    


		    <div class="form-group">
		        {{ Form::label('description', Lang::get('table.adventures.form.description') ) }}
		        {{ Form::textarea('description', Input::old('description'), array('class' => 'form-control')) }}
		    </div>

		    {{ Form::submit(Lang::get('table.adventures.form.button'), array('class' => 'btn btn-primary')) }}

		{{ Form::close() }}

  			
  	</div>
</div>
@endsection