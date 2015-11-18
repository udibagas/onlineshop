@extends('app')

@section('content')

	<h1>Buka Toko</h1>
	<hr />

	@include('store._form', ['method' => 'POST', 'url' => 'store'])

@stop