{!! Form::model($product, ['url' => $url, 'class' => 'form-horizontal', 'files' => true, 'method' => $method]) !!}

	<div class="form-group">
		{!! Form::label('name', 'Name:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('name', $product->name, ['class' => 'form-control', 'placeholder' => 'Product Name']) !!}	
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('description', 'Description:', ['class' => 'col-md-2 control-label']) !!}	
		<div class="col-md-10">
			{!! Form::textarea('description', $product->description, ['class' => 'form-control', 'placeholder' => 'Product Description', 'rows' => 3]) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('price', 'Price:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('price', $product->price, ['class' => 'form-control', 'placeholder' => 'Price']) !!}	
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('img', 'Image:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::file('img') !!}	
		</div>
	</div>

	<hr />

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
		</div>
	</div>

{!! Form::close() !!}