@extends('app')

@section('content')

	<h1>{{ $post->title }}</h1>
	<hr />

	{!! Markdown::convertToHtml($post->body) !!}

@stop