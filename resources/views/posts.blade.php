@extends('layouts.app')

@section('content')


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
	    			{{$post->message}}
	  			</div>
	  		</div>
	  	</div>
	</div>
@endforeach

<div class="panel panel-default">
	<div class="panel-heading">Newposts</div>
  	<div class="panel-body">
  		<form action="{{ url('/post') }}" method="POST" >
  			{{ csrf_field() }}
  			@include('common.errors')
	    	<div class="form-group">
	    		<label class="control-label">Message</label>
	    		<textarea name='message' class="form-control"></textarea>
	    		<button type="submitt" class="btn btn-primary">Send</button>
	    	</div>
  		</form>
  	</div>
</div>
@endsection