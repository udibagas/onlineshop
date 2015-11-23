<table class="table table-hover table-striped">
	<tbody>
		@foreach ($products as $p)
		<tr>
			<td style="width:150px;">
				<a href="/product/{{ $p->id }}">
					<img src="/uploads/{{ $p->image }}" alt="{{ $p->name }}" class="img-thumbnail" />
				</a>
			</td>
			<td>
				<h3><a href="/product/{{ $p->id }}">{{ $p->name }}</a></h3>
				<p>{{ $p->description }}</p>
			</td>
			<td><h4>{{ $p->price }}</h4></td>
			<td style="width:100px;" class="text-right">
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

{!! $products->render() !!}
