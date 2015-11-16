@extends('app')

@section('content')
	

	<a href="/product/create" class="btn btn-success pull-right">Create Product</a>
	<h1>Manage Products</h1>

	<hr />

	<!-- <div class="row">
		<div class="col-md-6">
			<div class="input-group">
				<div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
				{!! Form::text('faq', null, ['class' => 'form-control', 'placeholder' => 'Type your keyword here']) !!}
			</div>
		</div>
		<div class="col-md-6">
			<a href="/product/create" class="btn btn-success pull-right">Create Product</a>
		</div>
	</div>
	
	<br /> -->

	<!-- <table class="table table-striped table-hover" id="product-list">
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
        			<div class="btn-group">
		        		<a href="/product/{{ $p->id }}/edit" class="btn btn-success btn-sm">Edit</a>
		        		{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm delete']) !!}
        			</div>
        		{!! Form::close() !!}
        	</td>
        </tr>
    	@endforeach
	</table> -->

	<div id="Bfrtip"></div>

	<table id="product-list1" class="table table-striped table-hover">
		<thead>
			<tr>
				<th>Image</th>
				<th>Name</th>
				<th>Descrition</th>
				<th>Price</th>
				<th>Action</th>
			</tr>
		</thead>
	</table>
	


@stop

@section('script')

	<script type="text/javascript">
		$('.delete').click(function() {
			if(confirm('Anda yakin?')) { return true; };
			return false;
		});

		$(document).ready(function() {
		    
		    $('#product-list').DataTable();

		    $('#product-list1').DataTable({
		    	// dom: 'Bfrtip',
			    // buttons: [
			    //     'colvis',
			    //     'excel',
			    //     'print',
			    //     // 'collection',
			    //     'pdf'
			    // ],
		    	processing: true,
		    	serverSide: true,
		    	order: [[1, 'asc']],
		    	ajax : '/product/list',
		    	columns: [
		    		{data: 'image', render: function(data, type, full, meta) {
		    			return '<img src="/uploads/'+data+'" style="width:80px;" />';
		    		}, orderable: false},
		    		{data: 'name'},
		    		{data: 'description'},
		    		{data: 'price'},
		    		{data: 'id', render: function(data, type, full, meta) {
		    			return '<a href="/product/'+data+'/edit" class="btn btn-success btn-sm">Edit</a>';
		    		}, orderable: false}
		    	]
		    });

		});

	</script>

@stop