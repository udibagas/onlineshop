@extends('app')


@section('content')

	<h1>Create Note</h1>
	<hr />

	@include('note/_form', ['method' => 'POST', 'url' => 'note'])

@stop