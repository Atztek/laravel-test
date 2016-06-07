@extends('layouts.app')

@section('content')

<h1>
	{{ $adventure->name }}
</h1>

<div>
	{!! @markdown($adventure->description) !!}
</div>

@foreach ($posts as $post)
	<div class="panel panel-default">
		<div class="panel-heading">Panel heading without title</div>
	  	<div class="panel-body">
	  		<div class="row">
	  			<div class="col-xs-2">
	  				{{$post->user->name}}<br>
	  				{{$post->user->email}}
	  			</div>
	  			<div class="col-xs-10">
	  				{!! @markdown($post->message) !!}
	  			</div>
	  		</div>
	  	</div>
	</div>
@endforeach

<div class="panel panel-default">
	<div class="panel-heading">{{ Lang::get("table.adventures.newpost")}}</div>
  	<div class="panel-body">
  		<form action="{{ action('Table\PostController@write', [ $adventure->id] ) }}" method="POST" >
  			{{ csrf_field() }}
  			@include('common.errors')
	    	<div class="form-group">
	    		<label class="control-label">{{ Lang::get("table.adventures.postfield")}}</label>
	    		{{ Form::textarea('message', Input::old('message'), array('class' => 'form-control')) }}
	    	</div>
	    	<button type="submitt" class="btn btn-primary">{{ Lang::get("table.adventures.postsend")}}</button>
	    	<script>
				var simplemde = new SimpleMDE({ element: $("#message")[0] });
			</script>
  		</form>
  	</div>
</div>

@endsection