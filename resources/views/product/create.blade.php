@extends('app')

@section('content')

	<h1>Create Product</h1><hr />

	@include('product/_form', ['url' => 'product', 'method' => 'POST'])

@stop