@extends('app')

@section('content')
	<div class="row">
		<div class="col-md-6">
			<p>
				<input class="form-control" name="search" placeholder="Search">
			</p>
		</div>
		<div class="col-md-6"></div>
	</div>
	

	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th></th>
				<th>Name</th>
				<th>Descrition</th>
				<th>Price</th>
				<th>Action</th>
			</tr>
		</thead>
		@foreach ($products as $p)
        <tr>
        	<td><img src="/uploads/{{ $p->image }}" alt="{{ $p->name }}" style="height:60px;" /></td>
        	<td>{{ $p->name }}</td>
        	<td>{{ $p->description }}</td>
        	<td>{{ $p->price }}</td>
        	<td>
        		{!! Form::open(['method' => 'DELETE', 'url' => 'product/'.$p->id]) !!}
	        		<a href="/product/{{ $p->id }}/edit" class="btn btn-success btn-xs">Edit</a>
	        		{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs delete']) !!}
        		{!! Form::close() !!}
        	</td>
        </tr>
    	@endforeach
	</table>
	

    {!! $products->render() !!}

@stop