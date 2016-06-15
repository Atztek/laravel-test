@extends('layouts.app')

@section('content')
{{ Form::open( array('action' => array('Profile\CharacterController@write'))) }}



{{ Form::submit(Lang::get('profile.characterform.button_submit'), array('class' => 'btn btn-primary')) }}
<div class="row">
	<div class="col-xs-12">
		@include('common.errors')
	</div>
	<div class="col-xs-4">
		<div class="panel panel-info">
			<div class="panel-heading">
				{{ Lang::get("profile.characterform.main_info") }}
			</div>

			
			<div class="panel-body">
				<div class="form-group">
					{{ Form::label('character-name', Lang::get('profile.characterform.character-name') ) }}
		        	{{ Form::text('character-name', Input::old('character-name'), array('class' => 'form-control')) }}
				</div>

				<div class="form-group">
					{{ Form::label('age', Lang::get('profile.characterform.age') ) }}
		        	{{ Form::text('age', Input::old('age'), array('class' => 'form-control')) }}
				</div>

				<div class="form-group">
					{{ Form::label('height', Lang::get('profile.characterform.height') ) }}
		        	{{ Form::text('height', Input::old('height'), array('class' => 'form-control')) }}
				</div>				


				<div class="form-group">
					{{ Form::label('weight', Lang::get('profile.characterform.weight') ) }}
		        	{{ Form::text('weight', Input::old('weight'), array('class' => 'form-control')) }}
				</div>

				<div class="form-group">
					{{ Form::label('image', Lang::get('profile.characterform.image') ) }}
					{{ Form::file('image',array('class' => 'form-control')) }}
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-8"></div>
</div>
{{ Form::close() }}

@endsection