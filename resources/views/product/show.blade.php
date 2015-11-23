@extends('app')

@section('title') Jual {{ $product->name }} @stop

@section('content')
	<div class="row">
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-4">
					@include('product._images')
				</div>
				<div class="col-md-8">
					<h3>{{ $product->name }}</h3><hr />
					<p>{!! Markdown::convertToHtml($product->description) !!}</p><hr />
					<h3>Rp {{ number_format($product->price, 0, ',', '.') }}</h3><hr />
					
					<div>
						<span class="fa fa-star text-warning"></span>
						<span class="fa fa-star text-warning"></span>
						<span class="fa fa-star text-warning"></span>
						<span class="fa fa-star text-warning"></span>
						<span class="fa fa-star text-warning"></span>
					</div>

					<!-- <a href="/product/{{ $product->id }}/beli" class="btn btn-success btn-sm">Beli</a> -->
				</div>
			</div>

			@include('product/_review')

			<br />
			@include('product/_related')

		</div>

		<div class="col-md-4">
			
			@include('product/_seller')
			
			@include('product/_selling')

			@include('product/_recommended')

		</div>
	</div>

@stop