{!! Form::model($note, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method]) !!}

	<div class="form-group">
		{!! Form::label('store_id', 'Toko:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('store_id', Auth::user()->stores()->lists('name', 'id'), $note->store_id, ['class' => 'form-control']) !!}	
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('title', 'Title:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('title', $note->title, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('content', 'Content:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::textarea('content', $note->content, ['class' => 'form-control', 'placeholder' => 'Content']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('published', 'Published:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('published', [0 => 'No', 1 => 'Yes'], $note->published, ['class' => 'form-control']) !!}	
		</div>
	</div>

	<hr />

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
		</div>
	</div>

{!! Form::close() !!}