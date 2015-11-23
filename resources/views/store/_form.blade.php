{!! Form::model($store, ['class' => 'form-horizontal', 'method' => $method, 'url' => $url]) !!}

	<div class="form-group">
		{!! Form::label('name', 'Name:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('name', $store->name, ['class' => 'form-control', 'placeholder' => 'Store Name']) !!}	
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('tagline', 'Tagline:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('tagline', $store->tagline, ['class' => 'form-control', 'placeholder' => 'Tagline']) !!}	
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('description', 'Description:', ['class' => 'col-md-2 control-label']) !!}	
		<div class="col-md-10">
			{!! Form::textarea('description', $store->description, ['class' => 'form-control', 'placeholder' => 'Store Description', 'rows' => 3]) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('lokasi_id', 'Lokasi:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('lokasi_id', App\Lokasi::listKota(), $store->lokasi_id, ['class' => 'form-control', 'id' => 'lokasi_id']) !!}	
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('address', 'Address:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::textarea('address', $store->address, ['class' => 'form-control', 'placeholder' => 'Address', 'rows' => 3]) !!}	
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('phone', 'Phone:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('phone', $store->phone, ['class' => 'form-control', 'placeholder' => 'Phone']) !!}	
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('email', 'Email:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('email', $store->email, ['class' => 'form-control', 'placeholder' => 'Email']) !!}	
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('status', 'Status:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('status', $store->statuses, $store->status, ['class' => 'form-control']) !!}	
		</div>
	</div>

	<hr />

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
		</div>
	</div>


{!! Form::close() !!}

@section('css')
<link href="/select2/dist/css/select2.min.css" rel="stylesheet">
@stop

@section('script')

<script type="text/javascript" src="/select2/dist/js/select2.min.js"></script>

<script type="text/javascript">
	$('#lokasi_id').select2();
</script>

@stop