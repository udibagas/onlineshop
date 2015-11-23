@foreach ($product->discussions as $d)

<div class="media">
	<div class="media-left">
		<a href="#">
			<img class="media-object" src="/uploads/64.svg" alt="..." style="width:64px;">
		</a>
	</div>
	<div class="media-body">
		<h4 class="media-heading">{{ $d->user->name }}</h4>
		<p>{{ $d->comment }}</p>
		<small class="text-muted">{{ $d->updated_at->diffForHumans() }}</small>
	</div>
</div>
<hr />

@endforeach
