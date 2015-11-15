@extends('app')

@section('title') Jual {{ $product->name }} @stop

@section('content')
	<div class="row">
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-4">
					<img src="/uploads/{{ $product->image }}" alt="{{ $product->name }}" class="img-thumbnail" />
				</div>
				<div class="col-md-8">
					<h3>{{ $product->name }}</h3>
					<p>{{ $product->description }}</p>
					<h4>{{ $product->price }}</h4>

					<a href="/product/{{ $product->id }}/beli" class="btn btn-success btn-sm">Beli</a>
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