@extends('app')

@section('content')

<h1>Selamat datang, {{ $user->name }}!</h1>
<hr />

<div class="row">
	<div class="col-md-2">
		<a href="/user/{{ $user->id }}/edit" class="btn btn-success form-control">Edit Profile</a>
	</div>
	<div class="col-md-2">
		<a href="/store/create" class="btn btn-success form-control">Buka Toko</a>
	</div>
</div>


@stop