@extends('sites.layout.layout')

@section('body')

<!-- banner -->
<section class="banner">    	
	<div class="section-pattern">
      <div class="section-padding">
        <div class="container">
          <div class="wow animated fadeInUp" data-wow-delay=".5s">
            <h2 class="section-title">Find and book your ideal Trekking trip</h2><!-- /.section-title -->
	        <!-- Search Form -->
	        {!! Form::open(array('url' => 'search','class'=>'search')) !!}
	        <div class="search-hide">
              	{!! Form::text('search',null,['class'=>'search-text','id'=>'search-text','placeholder'=>'Search any Trekking site Eg: Annapurna Base Camp Trekking ....','required','autofocus']) !!}
              	{!! Form::submit('Search',['class'=>'btn btn-search','id'=>'search-submit']) !!}
            </div><!-- /.search-hide -->
            {!! Form::close() !!}
          </div>
        </div><!-- /.container -->
      </div><!-- /.section-padding -->
    </div><!-- /.section-pattern --> 
</section><!-- /.banner --> 

<section class="container">
	<!-- 3 boxes for quick link -->
	<div class="row boxes">
		<div class="col-md-4">
			<div class="box_container">
				<a href="{{ URL::to('trekkingSitesList') }}">
				<i class="icon-flag"></i>
				<h3>Popular Treks</h3>
				<p>
					Nec appareat definiebas ut, tota assum legimus ea mea. Choro officiis persecuti ea eos.
				</p>
				</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="box_container">
				<a href="{{ URL::to('') }}">
				<i class="icon-map-marker"></i>
				<h3>Top Route</h3>
				<p>
					Nec appareat definiebas ut, tota assum legimus ea mea. Choro officiis persecuti ea eos.
				</p>
				</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="box_container">
				<a href="{{ URL::to('') }}">
				<i class="icon-tags"></i>
				<h3>Online booking</h3>
				<p>
					Nec appareat definiebas ut, tota assum legimus ea mea. Choro officiis persecuti ea eos.
				</p>
				</a>
			</div>
		</div>
	</div><!--End row-->
	<hr class="rope">
	
	</div><!--End row -->
	<!---List of trekking sites -->
	<div class="row">
		<div class="col-md-12 text-center add_bottom_15">
			<h2>Popular Trekking Sites</h2>
		</div><!--End col-md-12 -->

	<div class="row popular-ts">
		@foreach($trekkingSite as $data)
		<div class="col-xs-12 col-sm-6 col-md-4 wow animated fadeInUp aaaa" data-wow-delay=".5s">
			<div class="row">
				<div class="col-lg-12 popular-ts-list">
					<div class='popular-ts-image-container'>
		                <a href="#"><img src="{{ url('uploads/img/'.$data->image) }}" alt="" class="img img-responsive"></a>
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
		<div class="col-md-12">
			<a href="{{ URL::to('trekkingSitesList') }}" class="btn btn-primary" style=" margin-bottom:20px; padding:10px 20px;">View all</a>
		</div>
		
	</div>

	<hr class="rope">

	<div class="row">
		<div class="col-md-6">
        	<h4 style="margin-bottom:20px;">Our Services</h4>
			<div class="feature-box">
				<div class="feature-box-icon">
					<i class="icon-map-marker"></i>
				</div>
				<div class="feature-box-info">
					<h4>Our fantastic location</h4>
					<p>
						Lorem ipsum dolor sit amet, ei per elitr persecuti adipiscing, ne discere temporibus nam.
					</p>
				</div>
			</div>
            
			<div class="feature-box">
				<div class="feature-box-icon">
					<i class="icon-group"></i>
				</div>
				<div class="feature-box-info">
					<h4>Our expert guides</h4>
					<p>
						 Lorem ipsum dolor sit amet, ei per elitr persecuti adipiscing, ne discere temporibus nam.
					</p>
				</div>
			</div>
            
			<div class="feature-box">
				<div class="feature-box-icon">
					<i class="icon-flag"></i>
				</div>
				<div class="feature-box-info">
					<h4>Our beautiful trekking area</h4>
					<p>
						Lorem ipsum dolor sit amet, ei per elitr persecuti adipiscing, ne discere temporibus nam.
					</p>
				</div>
			</div>
            
			<div class="feature-box">
				<div class="feature-box-icon">
					<i class="icon-ok"></i>
				</div>
				<div class="feature-box-info">
					<h4>Well-equipped Staff</h4>
					<p>
						 Lorem ipsum dolor sit amet, ei per elitr persecuti adipiscing, ne discere temporibus nam.
					</p>
				</div>
			</div>           
		</div>
		<!-- Google map -->
		<div class="col-md-6">
			<h4>Itineraries and Destinations</h4>
				<div id="map"></div>
				<script type="text/javascript">
					// The following example creates complex markers to indicate trekking sites
					function initMap() {
					  var map = new google.maps.Map(document.getElementById('map'), {
					    zoom: 6,
					    center: {lat: 27.7089427, lng: 85.2560925}
					  });

					  setMarkers(map);
					}
					// Data for the markers consisting of a name, a LatLng and a zIndex for the
					// order in which these markers should display on top of each other.
					var treks = [
					@foreach($trekMap as $data)
					  ['{{ $data->name}}', {{ $data->latitude }}, {{ $data->longitude }}, {{ $data->id }}],
					@endforeach
					];
					function setMarkers(map) {
					  // Adds markers to the map.

					  for (var i = 0; i < treks.length; i++) {
					    var trek = treks[i];
					    var marker = new google.maps.Marker({
					      position: {lat: trek[1], lng: trek[2]},
					      map: map,
					      title: trek[0],
					      zIndex: trek[3]
					    });
					  }
					}
			    </script>
			    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_zcLeKW3LB0rCzda4mFAF3UmlPaJnero&callback=initMap"></script>
			<!-- </div> --><!--End map-->
            
		</div>
	</div><!-- End row -->

</section><!-- End container -->

<!-- Scroll to Top button -->
<div id="scroll-to-top" class="scroll-to-top">
    <span>
      <i class="icon-chevron-up"></i>    
    </span>
</div><!-- /#scroll-to-top -->
@stop