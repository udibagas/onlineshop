@extends('app')


@section('content')

<h1>{{ $note->title }}</h1>
<hr />

{!! $note->content !!}

@stop