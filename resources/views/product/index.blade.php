@extends('app')

@section('title') Browse Product @stop

@section('content')


	<div class="row">
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
			
			@include('product._'.$view)
		</div>

		<div class="col-md-4">
			<div class="alert alert-success">
				<h3 class="centered">PUT YOUR PRODUCTS HERE!</h3>

				<a href="/ads" class="btn btn-success form-control">Tell me how!</a>
			</div>

			@include('product/_recommended')
		</div>
	</div>

	
@stop