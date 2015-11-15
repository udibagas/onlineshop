@extends('app')

@section('content')

	<h1>Sign Up</h1>
	<hr />

	{!! Form::open(['class' => 'form-horizontal']) !!}

		<div class="form-group">
			{!! Form::label('name', 'Username:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Username']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('email', 'Email:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('password', 'Password:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('password_confirmation', 'Confirm Password:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirm Password']) !!}
			</div>
		</div>

		<hr />

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				{!! Form::submit('Register', ['class' => 'btn btn-success']) !!}
				<a href="/auth/login" class="btn btn-info">Login</a>
			</div>
		</div>

	{!! Form::close() !!}

@stop