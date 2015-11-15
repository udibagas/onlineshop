@extends('app')

@section('title') Browse Product @stop

@section('content')


	<div class="row">
		<div class="col-md-9">
			<div class="row">
				@foreach ($products as $p)
				<div class="col-md-3">
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
		</div>

		<div class="col-md-3">
			<div class="alert alert-success">
				<h3 class="centered">PUT YOUR PRODUCTS HERE!</h3>

				<a href="/ads" class="btn btn-success form-control">Tell me how!</a>
			</div>

			@include('product/_recommended')
		</div>
	</div>

	
@stop