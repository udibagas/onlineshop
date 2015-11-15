{!! Form::model($faq, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method]) !!}

	<div class="form-group">
		{!! Form::label('question', 'Question:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('question', $faq->question, ['class' => 'form-control', 'placeholder' => 'Question']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('answer', 'Answer:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::textarea('answer', $faq->answer, ['class' => 'form-control', 'placeholder' => 'Answer']) !!}
		</div>
	</div>

	<hr />

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
		</div>
	</div>

{!! Form::close() !!}