@foreach ($product->reviews as $r)

<div class="media">
	<div class="media-left">
		<a href="#">
			<img class="media-object" src="/uploads/64.svg" alt="..." style="width:64px;">
		</a>
	</div>
	<div class="media-body">
		<h4 class="media-heading">{{ $r->user->name }}</h4>
		@for ($i=0;$i < $r->star;$i++)
			<span class="fa fa-star text-warning"></span>
		@endfor
		@for ($i=5;$i > $r->star;$i--)
			<span class="fa fa-star-o text-warning"></span>
		@endfor
		
		<p>{{ $r->comment }}</p>
		<small class="text-muted">{{ $r->updated_at->diffForHumans() }}</small>
	</div>
	<hr />
</div>

@endforeach
