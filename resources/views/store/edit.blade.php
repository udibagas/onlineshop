@extends('app')

@section('content')

	<h1>Edit Toko : {{ $store->name }}</h1>
	<hr />

	<div class="row">
		<div class="col-md-8">
			@include('store._form', ['method' => 'PATCH', 'url' => 'store/'.$store->id])
		</div>
		<div class="col-md-4">
			@include('store._tips')
		</div>
	</div>

@stop