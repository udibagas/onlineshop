@extends('app')


@section('content')

	<div style="background-image: url(/uploads/{{ $store->cover }});background-size:cover;height:300px;">
	</div>
	<br />

	@if (Auth::check() && Auth::user()->id == $store->user_id)

		<a href="/store/{{ $store->id }}/edit" class="btn btn-success pull-right">Update Toko</a>

	@endif

	<div class="row">
		<div class="col-md-2">
			<img src="/uploads/{{ $store->pp }}" class="img-thumbnail" />
		</div>

		<div class="col-md-10">
			<h1>{{ $store->name }} <small>{{ $store->tagline }}</small></h1>
		</div>
	</div>

	<br />
	
	<div class="alert alert-success">
		<blockquote><i>"{!! nl2br($store->description) !!}"</i></blockquote>
	</div>

	<div class="text-muted">
		<span class="fa fa-home"></span> {{ $store->address }} |  
		<a href="/lokasi/{{ $store->lokasi->id }}"><span class="fa fa-map-marker"></span> {{ $store->lokasi->nama }}</a><br />

		<span class="fa fa-phone"></span> {{ $store->phone }} | 
		<span class="fa fa-mobile"></span> {{ $store->mobile }} | 
		<span class="fa fa-bb">BBM</span> {{ $store->bb }} | 
		<span class="fa fa-whatsapp"></span> {{ $store->wa }} | 
		<span class="fa fa-envelope-o"></span> <a href="mailto:{{ $store->email }}">{{ $store->email }}</a><br />
		
		<span class="fa fa-facebook"></span> <a href="{{ $store->facebook }}" target="_blank">{{ $store->facebook }}</a> | 
		<span class="fa fa-twitter"></span> <a href="{{ $store->twitter }}" target="_blank">{{ $store->twitter }}</a> | 
		<span class="fa fa-instagram"></span> <a href="{{ $store->instagram }}" target="_blank">{{ $store->instagram }}</a> | 
		<span class="fa fa-globe"></span> <a href="{{ $store->web }}" target="_blank">{{ $store->web }}</a>
	</div>

	<hr />

	<div class="row">
		<div class="col-md-4">

			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title">Notes</h3>
				</div>
				<div class="list-group">
					
					@foreach ($store->notes as $n)
					
					<a class="list-group-item" href="/note/{{ $n->id }}">{{ $n->title }}</a>
					
					@endforeach

					@if (Auth::check() && Auth::user()->id == $store->user_id)
					
					<a class="list-group-item list-group-item-danger" href="/note/create"><i class="fa fa-plus"></i> CREATE NOTE</a>
					
					@endif

				</div>
			</div>

			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title">Etalase</h3>
				</div>
				<div class="list-group">
					
					@foreach ($store->etalases as $e)
					
					<a class="list-group-item" href="/etalase/{{ $e->id }}">
						
						<h4 class="list-group-item-heading">{{ $e->name }}<span class="badge pull-right">4</span></h4>
						<p class="list-group-item-text">{{ $e->description }}</p>

					</a>
					
					@endforeach

					@if (Auth::check() && Auth::user()->id == $store->user_id)
					
					<a class="list-group-item list-group-item-danger" href="/etalase/create"><i class="fa fa-plus"></i> CREATE ETALASE</a>
					
					@endif

				</div>
			</div>
			

		</div>
		<div class="col-md-8">

			<div class="well">
				<div class="row">
					<div class="col-md-6">
						{!! Form::open(['class' => 'form-inline']) !!}
						{!! Form::label('order', 'Order By:') !!}
						{!! Form::select('order', ['price' => 'Price', 'star' => 'Star'], 'price', ['class' => 'form-control']) !!}
						{!! Form::select('sort', ['asc' => 'ASC', 'desc' => 'DESC'], 'asc', ['class' => 'form-control']) !!}
						{!! Form::submit('Filter', ['class' => 'btn btn-success']) !!}
						{!! Form::close() !!}
					</div>
					<div class="col-md-6 text-right">
						<a href="?view=list"><span class="fa fa-list fa-2x"></span></a>&nbsp; 
						<a href="?view=list1"><span class="fa fa-th fa-2x"></span></a>
					</div>
				</div>
			</div>

			<div class="row">
				
				@foreach ($store->products as $p)

					<div class="col-md-3">
						@include('product._single')
					</div>

				@endforeach

			</div>

		</div>
	</div>

@stop