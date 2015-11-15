@extends('app')

@section('content')

	<h1>{{ $page->title }}</h1>
	<hr />

	{{ $page->body }}

@stop