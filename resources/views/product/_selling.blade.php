<h4>Toko ini juga menjual</h4>
<hr />
<div class="row">
	@foreach ($menjual as $p)
	<div class="col-md-6">
		@include('product._single')
	</div>
	@endforeach
</div>