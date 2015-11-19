@extends('app')

@section('content')

	<h1>Login</h1>
	<hr />

	{!! Form::open(['class' => 'form-horizontal']) !!}

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
			<div class="col-sm-offset-2 col-sm-10">
				{!! Form::checkbox('remember') !!} Remember Me
			</div>
		</div>

		<hr />

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				{!! Form::submit('Login', ['class' => 'btn btn-success']) !!}
				<a href="/password/email" class="btn btn-default">Forgot Password</a>

			</div>
		</div>

	{!! Form::close() !!}

@stop