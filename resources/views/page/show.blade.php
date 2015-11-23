@extends('app')

@section('content')

	<h1>{{ $page->title }}</h1>
	<hr />

	{!! Markdown::convertToHtml($page->body) !!}

@stop