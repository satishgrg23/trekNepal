@extends('admin.layouts.layout')

@section('body')
	<!--main content start-->
	<section id="main-content">
	  <section class="wrapper">
	  <div class="row">
	    <div class="col-lg-12">
	      <h3 class="page-header"><i class="fa fa fa-bars"></i> Booking Information</h3>
	      <ol class="breadcrumb">
	        <li><i class="fa fa-home"></i><a href="#">Home</a></li>
	        <li><i class="fa fa-bars"></i>Booking Information</li>
	      </ol>
	    </div>
	  </div>
	      <!-- page start-->
	  <div class="row">
	  <div class="col-lg-12">
	    <section class="panel">
	        <header class="panel-heading">
	           <label class="float-left">Booking Information</label>
	        </header>
	        <div class="panel-body">
	          @if (Session::has('flash_msg'))
	            <div class="alert alert-success">
	              <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
	              {{ Session::get('flash_msg') }}
	            </div>
	          @endif
	      
				<table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
				    <thead>
				        <tr>
				            <th>Cid</th>
				            <th>Full name</th>
				            <th>Address</th>
				            <th>Phone no</th>
				            <th>Email</th>
				            <th>No of person</th>
				            <th>Comment</th>
				            <th>Booking date</th>
				        </tr>
				    </thead>

				    <tbody>
					    @foreach($booking as $data )
					        <tr>
					            <td>{{ $data->id }}</td>
					            <td>{{ $data->fullname }}</td>
					            <td>{{ $data->address }}</td>
					            <td>{{ $data->phone }}</td>
					            <td>{{ $data->email }}</td>
					            <td>{{ $data->no_of_person }}</td>
					            <td>{{ $data->comment }}</td>
					            <td>{{ $data->booking_date }}</td>
					        </tr>
					    @endforeach
				    </tbody>
				</table>


	           
	        </div>
	    </section>
	    
	  </div>
	  </div>
	      <!-- page end-->
	  </section>
	</section>
	<!--main content end-->
@stop

