<h3>Related Products</h3>
<hr />
<div class="row">
	@foreach ($related as $p)
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