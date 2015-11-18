@extends('app')

@section('content')

	<h1>Edit Toko</h1>
	<hr />

	@include('store._form', ['method' => 'PATCH', 'url' => 'store/'.$store->id])

@stop