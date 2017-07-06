@extends('layouts.master')

@section('title', 'Submit a Pearl')

@section('content')

<div class="page-header">
	<h1>Submit a Pearl</h1>
</div>

{!! Form::model($shopopalo, ['action' => 'PearlController@store']) !!}

 <div class="form-group">
	{!! Form::label('pearl', 'What\'s something funny your child said?') !!}
	{!! Form::text('pearl', '', ['class' => 'form-control', 'placeholder' => 'Your child\'s pearl...']) !!}
 </div>

  <div class="form-group">
	{!! Form::label('child_name', 'What\'s the name of your child?') !!}
	{!! Form::text('child_name', '', ['class' => 'form-control', 'placeholder' => 'Type the name...']) !!}
 </div>

  <div class="form-group">
	{!! Form::label('child_age', 'How old is your child?') !!}
	{!! Form::text('child_age', '', ['class' => 'form-control', 'placeholder' => 'Enter the age, e.g. 3 years 5 months']) !!}
 </div>

 <button class="btn btn-success" type="submit">Submit a Pearl</button>

{!! Form::close() !!}

@endsection