@extends('app')

@section('content')

	<h1>Edit Product : {{ $product->name }}</h1>
	<hr />

	@include('product._form', ['url' => 'product/'.$product->id, 'method' => 'PATCH'])

@stop