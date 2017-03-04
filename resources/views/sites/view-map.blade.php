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
				<li><a href="#">Map</a></li>
			</ul>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 add_bottom_15">
			<h2>{{ $trekkingSite->name }}</h2>
		</div><!--End col-md-12 -->
	</div><!--End row -->

	<div class="row " style="margin-top:50px;">
		
		<!-- display the google map -->
		{!! $trekkingSite->embeded_map !!}

		
	</div>
		
</section>	

@stop