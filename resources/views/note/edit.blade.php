@extends('app')


@section('content')

	<h1>Update Note : {{ $note->title }}</h1>
	<hr />

	@include('note/_form', ['method' => 'PATCH', 'url' => 'note/'.$note->id])

@stop