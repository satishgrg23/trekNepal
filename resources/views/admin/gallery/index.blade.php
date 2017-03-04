@extends('admin.layouts.layout')

@section('body')
	<!--main content start-->
	<section id="main-content">
	  <section class="wrapper">
	  <div class="row">
	    <div class="col-lg-12">
	      <h3 class="page-header"><i class="fa fa fa-bars"></i> Trekking Sites Gallery</h3>
	      <ol class="breadcrumb">
	        <li><i class="fa fa-home"></i><a href="#">Home</a></li>
	        <li><i class="fa fa-bars"></i>Trekking Sites Gallery</li>
	      </ol>
	    </div>
	  </div>
	      <!-- page start-->
	  <div class="row">
	  <div class="col-lg-12">
	    <section class="panel">
	        <header class="panel-heading">
	           <label class="float-left">Trekking Sites Gallery</label>
	            
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
				            <th>Tid</th>
				            <th>Name</th>
				            <th>Action</th>
				        </tr>
				    </thead>

				    <tbody>
					    @foreach($trekkingSite as $data )
					        <tr>
					            <td>{{ $data->id }}</td>
					            <td>{{ $data->name }}</td>
					            <td>
					            	<div class="btn-group">
				                        <a class="btn btn-success btn-edit" href="{{ URL::to('admin/gallery/'.$data->id) }}"><i class="icon-edit"></i> View</a>
					                </div>
					            </td>
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

