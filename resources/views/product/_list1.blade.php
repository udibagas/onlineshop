<div class="row">
	@foreach ($products as $p)
	<div class="col-md-3">
		@include('product._single')
	</div>
	@endforeach
</div>
{!! $products->render() !!}