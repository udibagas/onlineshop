{!! Form::model($post, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method]) !!}

	<div class="form-group">
		{!! Form::label('title', 'Title:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('body', 'Body:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Body']) !!}
		</div>
	</div>

	<hr />

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
		</div>
	</div>

{!! Form::close() !!}