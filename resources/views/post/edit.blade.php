@extends('app')


@section('content')

	<h1>Update Post : {{ $post->title }}</h1>
	<hr />

	@include('post/_form', ['method' => 'PATCH', 'url' => 'post/'.$post->id])

@stop