<h4>Penjual ini juga menjual</h4>
<hr />
<div class="row">
	@foreach ($menjual as $p)
	<div class="col-md-6">
		<div class="thumbnail">
			<a href="/product/{{ $p->id }}">
				<img src="/uploads/{{ $p->image }}" alt="{{ $p->name }}">
			</a>
			<div class="caption"  style="text-align:center;">
				<h4><a href="/product/{{ $p->id }}">{{ $p->name }}</a></h4>
				<h5>{{ $p->price }}</h5>
			</div>
		</div>
	</div>
	@endforeach
</div>