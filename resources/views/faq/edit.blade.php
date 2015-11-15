@extends('app')


@section('content')

	<h1>Update FAQ : {{ $faq->question }}</h1>
	<hr />

	@include('faq/_form', ['method' => 'PATCH', 'url' => 'faq/'.$faq->id])

@stop