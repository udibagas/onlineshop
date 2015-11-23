@extends('app')


@section('content')

	<h1>{{ $store->name }}</h1>
	<hr />

	<div class="row">
		<div class="col-md-3">
			
			Etalase

		</div>
		<div class="col-md-9">

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