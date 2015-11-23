@extends('app')


@section('content')

	<h1>{{ $store->name }} <small>-- {{ $store->tagline }}</small></h1>
	<hr />
	<blockquote>{!! nl2br($store->description) !!}</blockquote>
	<hr />
	<div class="text-muted">
		<span class="fa fa-home"></span> {!! $store->address !!} |  
		<a href="/lokasi/{{ $store->lokasi->id }}"><span class="fa fa-map-marker"></span> {{ $store->lokasi->nama }}</a> | 
		 
		<span class="fa fa-phone"></span> {{ $store->phone }} | 
		<span class="fa fa-mobile"></span> {{ $store->phone }} | 
		<span class="fa fa-envelope-o"></span> <a href="mailto:{{ $store->email }}">{{ $store->email }}</a> | 
		<span class="fa fa-facebook"></span> {{ $store->phone }} | 
		<span class="fa fa-twitter"></span> {{ $store->phone }} | 
		<span class="fa fa-globe"></span> {{ $store->phone }}
	</div>
	<hr />

	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title">Notes</h3>
				</div>
				<ul class="list-group">
					<li class="list-group-item">Cras justo odio</li>
					<li class="list-group-item">Dapibus ac facilisis in</li>
					<li class="list-group-item">Morbi leo risus</li>
					<li class="list-group-item">Porta ac consectetur ac</li>
					<li class="list-group-item">Vestibulum at eros</li>
				</ul>
			</div>

			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title">Etalase</h3>
				</div>
				<ul class="list-group">
					<li class="list-group-item">Cras justo odio</li>
					<li class="list-group-item">Dapibus ac facilisis in</li>
					<li class="list-group-item">Morbi leo risus</li>
					<li class="list-group-item">Porta ac consectetur ac</li>
					<li class="list-group-item">Vestibulum at eros</li>
				</ul>
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