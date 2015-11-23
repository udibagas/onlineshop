{!! Form::open(['class' => 'form-vertical', 'url' => 'review', 'method' => 'POST']) !!}
				
	{!! Form::hidden('product_id', $product->id) !!}

	<p><input class="form-control" type="number" min="1" max="5" step="1" name="star"></p>

	<p>{!! Form::textarea('comment', null, ['class' => 'form-control', 'placeholder' => 'Your Comment', 'rows' => 3]) !!}</p>

	<p>{!! Form::submit('Send', ['class' => 'btn btn-success']) !!}</p>

{!! Form::close() !!}