<h4>Recommended Products</h4>
<hr />
<div class="row">
	@foreach ($recommended as $p)
	<div class="col-md-6">
		@include('product._single')
	</div>
	@endforeach
</div>