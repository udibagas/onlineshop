@extends('app')


@section('content')

	<h1>Update Page : {{ $page->title }}</h1>
	<hr />

	@include('page/_form', ['method' => 'PATCH', 'url' => 'page/'.$page->id])

@stop