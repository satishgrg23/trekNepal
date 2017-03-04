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
				<li><a href="#">Trekking sites</a></li>
			</ul>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 add_bottom_15">
			<h2>List of Trekking Sites (Total sites: {{ $trekkingSite->total() }})</h2>
		</div><!--End col-md-12 -->
	</div><!--End row -->

	<div class="row popular-ts">
		@foreach($trekkingSite as $data)
		<div class="col-xs-12 col-sm-6 col-md-4 wow animated fadeInUp aaaa" data-wow-delay=".5s">
			<div class="row">
				<div class="col-lg-12 popular-ts-list">
					<div class='popular-ts-image-container'>
		                <a href="#"><img src="{{url('uploads/img/'.$data->image)}}" alt="" class="img img-responsive"></a>
		            </div>
		            <div class='category-listing-title'>
		              {{ $data->name }}
		            </div>
		            <!-- Subtitle (unenrolled users) -->
		            <div class='category-listing-subtitle'>
		            	<p>
		            		<i class="icon-money"></i> Cost: {{ $data->cost }}
		            		<a href="{{ URL::to('trekkingSites/'.$data->id) }}" class="btn btn-primary btn-ts">View Details</a>
		            	</p>
						<p><i class="icon-time"></i> Duration: {{ $data->duration }}</p>
						<p><i class="icon-tasks"></i><a class="po-link" href="javascript:void(0)"> Level: {{ $data->level }}</p>
		            </div>		
				</div>
			</div>	
		</div>
		@endforeach
		
	</div>
	<div class="row">
		<div class="col-md-12 pagination">
			{{ $trekkingSite->links() }}	
		</div>
		
	</div>
		
</section>	



			
		

	





@stop