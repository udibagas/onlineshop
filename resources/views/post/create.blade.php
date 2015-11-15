@extends('app')


@section('content')

	<h1>Create Post</h1>
	<hr />

	@include('post/_form', ['method' => 'POST', 'url' => 'post'])

@stop