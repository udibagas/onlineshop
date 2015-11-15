@extends('app')

@section('content')

	<h1>Request Reset Password</h1>
	<hr />

	{!! Form::open(['class' => 'form-inline']) !!}

		{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
		{!! Form::submit('Send Request', ['class' => 'btn btn-success']) !!}
	
	{!! Form::close() !!}

@stop