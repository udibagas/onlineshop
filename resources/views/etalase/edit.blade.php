@extends('app')


@section('content')

	<h1>Update Etalase : {{ $etalase->name }}</h1>
	<hr />

	@include('etalase/_form', ['method' => 'PATCH', 'url' => 'etalase/'.$etalase->id])

@stop