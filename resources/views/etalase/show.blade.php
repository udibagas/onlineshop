@extends('app')


@section('content')

<h1>{{ $etalase->name }}</h1>
<hr />

{!! $etalase->description !!}

@stop