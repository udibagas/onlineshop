<img src="/uploads/{{ $product->image }}" alt="{{ $product->name }}" class="img-thumbnail" />
<br /><br />
<div class="row">
	@for($i=0;$i<=5;$i++)

	<div class="col-md-4">
		<img src="/uploads/{{ $product->image }}" alt="{{ $product->name }}" class="img-thumbnail" />
	</div>

	@endfor
</div>