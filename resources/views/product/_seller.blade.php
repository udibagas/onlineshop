<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Seller</h3>
	</div>

	<div class="panel-body">
		<h3><a href="/store/{{ $product->store_id }}">{{ $product->store->name }}</a></h3><hr />
		<div class="text-muted">
			<span class="fa fa-home"></span> {{ $product->store->address }}<br />
			<a href="/lokasi/{{ $product->store->lokasi->id }}"><span class="fa fa-map-marker"></span> {{ $product->store->lokasi->nama }}</a><br />
			<span class="fa fa-phone"></span> {{ $product->store->phone }} | 
			<span class="fa fa-mobile"></span> {{ $product->store->mobile }}<br />
			<span class="fa fa-whatsapp"></span> {{ $product->store->wa }} | 
			<span class="fa fa-bb">BBM</span> {{ $product->store->bb }}<br />
			<span class="fa fa-envelope-o"></span> <a href="mailto:{{ $product->store->email }}">{{ $product->store->email }}</a><br />
			<span class="fa fa-facebook"></span> <a href="{{ $product->store->facebook }}" target="_blank">{{ $product->store->facebook }}</a><br />
			<span class="fa fa-twitter"></span> <a href="{{ $product->store->twitter }}" target="_blank">{{ $product->store->twitter }}</a><br />
			<span class="fa fa-instagram"></span> <a href="{{ $product->store->instagram }}" target="_blank">{{ $product->store->instagram }}</a><br />
			<span class="fa fa-globe"></span> <a href="{{ $product->store->web }}" target="_blank">{{ $product->store->web }}</a>
		</div>
	</div>
</div>