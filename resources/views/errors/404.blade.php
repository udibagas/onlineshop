@extends('app')

@section('content')

	<div class="alert alert-danger">
		<strong>404</strong> - Halaman yang Anda cari tidak ditemukan.
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