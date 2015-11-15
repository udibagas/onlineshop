@extends('app')

@section('content')

	<div class="alert alert-danger">
		<strong>404</strong> - Halaman yang Anda cari tidak ditemukan.
	</div>

	<div class="row">
		@foreach ($products as $p)
		<div class="col-md-2">
			<div class="thumbnail">
				<a href="/product/{{ $p->id }}">
					<img src="/uploads/{{ $p->image }}" alt="{{ $p->name }}">
				</a>
				<div class="caption"  style="text-align:center;">
					<h4><a href="/product/{{ $p->id }}">{{ $p->name }}</a></h4>
					<h5>{{ $p->price }}</h5>
					<p><a href="/beli" class="btn btn-success btn-sm" role="button" style="width:100%;">Beli</a></p>
				</div>
			</div>
		</div>
		@endforeach
	</div>
	{!! $products->render() !!}

@stop