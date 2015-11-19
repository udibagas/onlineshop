{!! Form::model($user, ['class' => 'form-horizontal', 'url' => 'user/'.$user->id, 'method' => 'PATCH']) !!}

	<div class="form-group">
		{!! Form::label('name', 'Name:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('email', 'Email:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Email', 'readonly' => true]) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('password', 'Password:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Kosongkan jika tidak berubah']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('password_confirmation', 'Confirm Password:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirm Password']) !!}
		</div>
	</div>

	<hr />

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
		</div>
	</div>

{!! Form::close() !!}