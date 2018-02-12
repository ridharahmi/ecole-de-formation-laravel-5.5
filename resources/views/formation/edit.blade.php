@extends('layouts.app')

@section('content')
<div class="contact section container">
<h2 class="title">Créer New Formation</h2>
{!! Form::model($formation, array('class'=>'form-horizontal', 'method'=>'PATCH','action'=>['FormationController@update',$formation->id],'files'=>true)) !!}
      <div class=" text-center">
	    <img class="img-edit" src="{{ asset($formation->image) }}">
	     <input type="hidden" name="fichier" value="{{ $formation->image }}" /> 
      </div>
	<div class="form-group">
		<div class="col-md-1 text-right">
		{!! Form::label('title','title', array('class' => 'control-label')) !!}
		</div>
		<div class="col-md-9">
			{!! Form::text('title', null, array('class'=>'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-1 text-right">
		{!! Form::label('description','description', array('class' => 'control-label')) !!}
		</div>
		<div class="col-md-9">
			{!! Form::textarea('description', null, array('class'=>'form-control', 'id'=>'article', 'rows' => '12')) !!}
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-1 text-right">
		{!! Form::label('price','price', array('class' => 'control-label')) !!}
		</div>
		<div class="col-md-4">
			{!! Form::text('price', null, array('class'=>'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-1 text-right">
		{!! Form::label('image','image', array('class' => 'control-label')) !!}
		</div>
		<div class="col-md-4">
			{!! Form::file('image', array('class'=>'form-control')) !!}
		</div>
	</div>
	{!! Form::submit('Save formation', array('class'=>'col-md-offset-2 btn btn-primary')) !!}

	{!! Form::close() !!}
</div>
@endsection 