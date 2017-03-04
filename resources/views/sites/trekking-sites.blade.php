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
				<li><a href="{{ URL::to('trekkingSitesList') }}">Trekking sites</a></li>
				<li><a href="#">{{ $trekkingSite->name }}</a></li>
			</ul>
		</div>
	</div>

	<div class="row trekking-site">
		<h2 class="ts-title">Annapurna Base Camp Trekking</h2>
		<div class="breadcrumblist">
			<ul class="breadcrumb">
				<li><i class="icon-money"> Cost : {{ $trekkingSite->cost }}</i></li>
				<li><i class="icon-time"> Duration : {{ $trekkingSite->duration }}</i></li>
				<li><i class="icon-tasks"> Level : {{ $trekkingSite->level }}</i></li>
				<li><i class="icon-map-marker"> Trip Summary : {{ $trekkingSite->trip_summary }}</i></li>
			</ul>
		</div>
	</div>	
</section>	

<section class="ts-banner">
	<div class="container">
		<div class="row">
			<!-- Quick Booking -->
			<div class="col-xs-12 col-md-4 col-lg-4 quick-booking">
				<h3 class="text-center" style="margin:8px 0; font-weight: 600;">Recent Trekking Trip</h3>
				<hr style="border-top: 2px solid #eee; margin-bottom: 0px;">
				<div class="table-responsive">
  					@if($count>=1)
  					<table class="table table-hover">
  						<tr>
  							<td>Depature Date</td>
  							<td>{{ $trips->depature_date }}</td>
  						</tr>
  						<tr>
  							<td>Return Date</td>
  							<td>{{ $trips->return_date }}</td>
  						</tr>
  						<tr>
  							<td>Cost</td>
  							<td>{{ $trips->cost }}</td>
  						</tr>
  						<tr>
  							<td>Status</td>
  							<td>
  								@if($trips->status==0)
  									<label style="color: green;">Active</label>
  								@else
  									<label style="color: red;">Expired</label>
  								@endif
  							</td>
  						</tr>
  						<tr>
  							<td colspan="2">
  							@if (Auth::guard('user')->user())
  								{!! Form::open(['method'=>'get','url'=>['bookTrip'] ])!!}
  									{!! Form::hidden('tid',$trips->id) !!}
  									{!! Form::hidden('cid',Auth::guard('user')->user()->id) !!} 
  									{!! Form::Submit('Book',['class'=>'btn btn-primary']) !!}
  								{!! Form::close() !!}
  							@else
  								<button class="btn btn-primary" data-toggle="modal" data-target="#sign-in" style="color:#000;">Book</button>
  							@endif
  							</td>

  						</tr>
  						<tr>
  							<td colspan="2" style="padding-top: 0px;border-top: none;">
  								<a href="{{ url('trekkingTrips/'.$trekkingSite->id)}}" style="color:#282e3f; text-decoration: underline;">
  									View more Trekking trips
  								</a>
  							</td>
  						</tr>
  					</table>
  					@else
  					 <p class="text-center">No data to display</p>
  					@endif
  				</div>
			</div>
			
			<!-- Trekking site Gallery -->
			<div class="col-xs-12 col-md-7 col-lg-6">
				<div class="ts-gallery">
				  @foreach($gallery as $data) 
				  <div><img src="{{ url('uploads/gallery/'.$data->image_name) }}" alt="ts-gallery" height="335" width="560" class="img img-responsive" ></div>
				  @endforeach
				</div>
			</div>

			<!-- Shortcut -->
			<div class="col-xs-12 col-md-1 col-lg-2" style="padding-left:0;">
				<a target="__blank" href="{{ URL::to('viewMap/'.$trekkingSite->id) }}" >
					<div class="map-shortcut">
						<img src="{{ url('img/view-map.png') }}" alt="map-marker" class="img img-reponsive" width="130" height="100">
					</div>
				</a>
				<a href="">
					<div class="review-shortcut">
						<img src="{{ url('img/review.png') }}" alt="map-marker" class="img img-reponsive" width="130" height="100">
					</div>
				</a>
				<a href="">
					<div class="review-shortcut">
						<img src="{{ url('img/map-marker.jpg') }}" alt="map-marker" class="img img-reponsive" width="130" height="100">
					</div>
				</a>
			</div>
		</div>		
	</div>
</section>

<section class="container">
	<div class="panel">
		<div class="panel-heading">
		    <h2 class="panel-title"><strong>{!! $trekkingSite->name !!}</strong></h2>
		    <p class="panel-title-content">{!! $trekkingSite->description !!}</p>
		</div>
		<div class="panel-body">
		    <ul class="nav nav-tabs">
		      <li class="active"><a href="#itenary" data-toggle="tab">Itenary Details</a></li>
		      <li><a href="#price" data-toggle="tab">Price Include/Exclude</a></li>
		      <li><a href="#facts" data-toggle="tab">Facts</a></li>
		      <li><a href="#equipment" data-toggle="tab">Equipment</a></li>
		    </ul>
		    <div class="tab-content">
		    	<!-------------------------------Itenary Details Tab begins------------------------------------>
		  		<div id="itenary" class="tab-pane fade in active">
		  			{!! $trekkingSite->itinerary_details !!}
		  		</div>
		    	<!-------------------------------Price Include/Exclude begins------------------------------------>
		  		<div id="price" class="tab-pane fade in ">
	              {!! $trekkingSite->price_include_exclude !!}
		        </div>
		        <!-------------------------------Price Include/Exclude begins------------------------------------>
		  		<div id="facts" class="tab-pane fade in ">
	              {!! $trekkingSite->facts !!}
		        </div>
		        <div id="equipment" class="tab-pane fade in ">
		          {!! $trekkingSite->equipments !!}
		        </div>
		    </div>
		</div>
	</div>
</section>			
@stop