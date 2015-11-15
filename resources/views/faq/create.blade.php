@extends('app')


@section('content')

	<h1>Create FAQ</h1>
	<hr />

	@include('faq/_form', ['method' => 'POST', 'url' => 'faq'])

@stop