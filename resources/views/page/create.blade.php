@extends('app')


@section('content')

	<h1>Create Page</h1>
	<hr />

	@include('page/_form', ['method' => 'POST', 'url' => 'page'])

@stop