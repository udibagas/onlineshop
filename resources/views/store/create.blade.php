@extends('app')

@section('content')

	<h1>Buka Toko</h1>
	<hr />

	<div class="row">
		<div class="col-md-8">
			@include('store._form', ['method' => 'POST', 'url' => 'store'])
		</div>
		<div class="col-md-4">
			@include('store._tips')
		</div>
	</div>
	

@stop