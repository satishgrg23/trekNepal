@extends('sites.layout.layout')

@section('body')

<section class="page-banner">
	<div class="page-title">
		<h1 class="text-center">ENJOY YOUR TRIP</h1>
	</div>
</section>

<section class="container">
	
	<div class="row">
		<div class="breadcrumblist">
			<ul class="breadcrumb">
				<li><a href="{{ URL::to('/') }}">Home</a></li>
				<li><a href="#">Trekking sites trip list</a></li>
			</ul>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>Id</th>
			        <th>Trip name</th>
			        <th>Depature Date</th>
			        <th>Return Date</th>
			        <th>Cost</th>
			        <th>Status</th>
			        <th>Action</th>
			      </tr>
			    </thead>
			    <tbody>
			      @foreach($trip as $data)
			      <tr>
			      	<td>{{ $data->id }}</td>
			        <td>{{ $trip_name->name }}</td>
			        <td>{{ $data->depature_date }}</td>
			        <td>{{ $data->return_date }}</td>
			        <td>{{ $data->cost }}</td>
			        <td>
			        	@if($data->status==0)
			        		Active
			        	@else
			        		Inactive
			        	@endif
			        </td>
			        <td>
			        		@if (Auth::guard('user')->user())
  								{!! Form::open(['method'=>'get','url'=>['bookTrip'] ])!!}
  									{!! Form::hidden('tid',$tripId) !!}
  									{!! Form::hidden('cid',Auth::guard('user')->user()->id) !!} 
  									{!! Form::Submit('Book',['class'=>'btn btn-primary']) !!}
  								{!! Form::close() !!}
  							@else
  								<button class="btn btn-primary" data-toggle="modal" data-target="#sign-in" style="color:#000;">Book</button>
  							@endif
			        </td>
			      </tr>
			      @endforeach
			    </tbody>
			 </table>
		</div>
	</div>
		
</section>	



			
		

	





@stop