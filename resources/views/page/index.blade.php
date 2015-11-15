@extends('app')

@section('content')

	<h1>Manage Pages</h1>
	<hr />

	<div class="row">
		<div class="col-md-6">
			<!-- <p>
				<input class="form-control" name="search" placeholder="Search">
			</p> -->
		</div>
		<div class="col-md-6">
			<a href="/page/create" class="btn btn-success pull-right">Create Page</a>
		</div>
	</div>


	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>Title</th>
				<th>Action</th>
			</tr>
		</thead>
		@foreach ($pages as $p)
        <tr>
        	<td><a href="page/{{ $p->id }}">{{ $p->title }}</a></td>
        	<td>
        		{!! Form::open(['method' => 'DELETE', 'url' => 'page/'.$p->id]) !!}
	        		<a href="/page/{{ $p->id }}/edit" class="btn btn-success btn-xs">Edit</a>
	        		{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs delete']) !!}
        		{!! Form::close() !!}
        	</td>
        </tr>
    	@endforeach
	</table>
	

    {!! $pages->render() !!}

@stop