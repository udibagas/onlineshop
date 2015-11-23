<a href="/product/{{ $p->id }}">
	<div class="thumbnail">
		<div class="center-cropped" style="background-image:url(/uploads/{{ $p->image }})"></div>
		
		<div class="caption text-center">
			<h5 class="text-nowrap text-ellipsis">{{ $p->name }}</h5>
			<h4>Rp {{ number_format($p->price, 0, ',', '.') }}</h4>
			<span class="fa fa-star text-warning"></span>
			<span class="fa fa-star text-warning"></span>
			<span class="fa fa-star text-warning"></span>
			<span class="fa fa-star text-warning"></span>
			<span class="fa fa-star text-warning"></span>
		</div>
	</div>
</a>