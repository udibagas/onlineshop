@extends('app')

@section('content')

	<h1>Manage Posts</h1>
	<hr />

	<div class="row">
		<div class="col-md-6">
			<!-- <p>
				<input class="form-control" name="search" placeholder="Search">
			</p> -->
		</div>
		<div class="col-md-6">
			<a href="/post/create" class="btn btn-success pull-right">Create Post</a>
		</div>
	</div>


	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>Title</th>
				<th>Action</th>
			</tr>
		</thead>
		@foreach ($posts as $p)
        <tr>
        	<td><a href="post/{{ $p->id }}">{{ $p->title }}</a></td>
        	<td>
        		{!! Form::open(['method' => 'DELETE', 'url' => 'post/'.$p->id]) !!}
	        		<a href="/post/{{ $p->id }}/edit" class="btn btn-success btn-xs">Edit</a>
	        		{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs delete']) !!}
        		{!! Form::close() !!}
        	</td>
        </tr>
    	@endforeach
	</table>
	

    {!! $posts->render() !!}

@stop