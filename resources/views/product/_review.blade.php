<br /><br />
<div>
	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#review" aria-controls="review" role="tab" data-toggle="tab">Reviews</a></li>
		<li role="presentation"><a href="#discussion" aria-controls="discussion" role="tab" data-toggle="tab">Discussions</a></li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="review">
			<br />
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
						<span class="fa fa-star"></span>
					@endfor
					@for ($i=5;$i > $r->star;$i--)
						<span class="fa fa-star-o"></span>
					@endfor
					
					<p>{{ $r->comment }}</p>
					<small class="text-muted">{{ $r->updated_at->diffForHumans() }}</small>
				</div>
				<hr />
			</div>

			@endforeach

			<!-- <br /> -->

			{!! Form::open(['class' => 'form-vertical', 'url' => 'review', 'method' => 'POST']) !!}
				
				{!! Form::hidden('product_id', $product->id) !!}

				<p>{!! Form::text('star', null, ['class' => 'form-control', 'placeholder' => 'Star (1 - 5)']) !!}</p>

				<p>{!! Form::textarea('comment', null, ['class' => 'form-control', 'placeholder' => 'Your Comment', 'rows' => 3]) !!}</p>

				<p>{!! Form::submit('Send', ['class' => 'btn btn-success']) !!}</p>
			
			{!! Form::close() !!}

		</div>

		<div role="tabpanel" class="tab-pane" id="discussion">
			
			<br />
			
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

			{!! Form::open(['class' => 'form-vertical', 'url' => 'discussion', 'method' => 'POST']) !!}
				
				{!! Form::hidden('product_id', $product->id) !!}

				<p>{!! Form::textarea('comment', null, ['class' => 'form-control', 'placeholder' => 'Your Comment', 'rows' => 3]) !!}</p>

				<p>{!! Form::submit('Send', ['class' => 'btn btn-success']) !!}</p>
			
			{!! Form::close() !!}
		
		</div>

	</div>
</div>