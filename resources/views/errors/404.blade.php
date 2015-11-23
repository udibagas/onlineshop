@extends('app')

@section('content')

	<div class="alert alert-danger text-center">
		<h3>ERROR 404 : Halaman yang Anda cari tidak ditemukan.</h3>
	</div>

	<div class="row">
		@foreach ($products as $p)
		<div class="col-md-2">
			@include('product._single')
		</div>
		@endforeach
	</div>
	{!! $products->render() !!}

@stop