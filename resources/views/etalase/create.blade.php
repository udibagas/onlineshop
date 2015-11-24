@extends('app')


@section('content')

	<h1>Create Etalase</h1>
	<hr />

	@include('etalase/_form', ['method' => 'POST', 'url' => 'etalase'])

@stop