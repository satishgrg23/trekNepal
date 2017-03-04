@extends('admin.layouts.layout')

@section('body')
	<!--main content start-->
	<section id="main-content">
	  <section class="wrapper">
	  <div class="row">
	    <div class="col-lg-12">
	      <h3 class="page-header"><i class="fa fa fa-bars"></i> Trekking Sites</h3>
	      <!-- Breadcrumb -->
	      <ol class="breadcrumb">
	        <li><i class="fa fa-home"></i><a href="#">Home</a></li>
	        <li><i class="fa fa-bars"></i>Trekking Sites</li>
	      </ol>
	    </div>
	  </div>
	  <div class="row">
		  <div class="col-lg-12">
		    <section class="panel">
		        <header class="panel-heading">
		           <label class="float-left">Trekking Sites</label>
		           <!-- link to add trekking sites -->
		           <a class="float-right" href="{{ URL::to('admin/trekkingSites/create') }}">
		            <span class="icon-plus-sign">&nbsp;</span>Add Trekking Sites
		           </a>
		        </header>
		        <!-- Div to display success or error message -->
		        <div class="panel-body">
		          @if (Session::has('flash_msg'))
		            <div class="alert alert-success">
		              <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
		              {{ Session::get('flash_msg') }}
		            </div>
		          @endif
		      	<!-- Data table to display the records of trekking sites -->
					<table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
					    <thead>
					        <tr>
					            <th>Tid</th>
					            <th>Image</th>
					            <th>Name</th>
					            <th>Cost</th>
					            <th>Duration</th>
					            <th>Level</th>
					            <th>Action</th>
					        </tr>
					    </thead>

					    <tbody>
						    @foreach($trekkingSite as $data )
						        <tr>
						            <td>{{ $data->id }}</td>
						            <td><img src="{{ url('uploads/img/'.$data->image) }}" width="150" height="80" alt=""></td>
						            <td>{{ $data->name }}</td>
						            <td>{{ $data->cost }}</td>
						            <td>{{ $data->duration }}</td>
						            <td>{{ $data->level }}</td>
						            <td>
						            	<div class="btn-group">
						            		<!-- Edit trekking site button -->
					                        <a class="btn btn-success btn-edit" href="{{ URL::to('admin/trekkingSites/'.$data->id.'/edit') }}"><i class="icon-edit"></i></a>
					                        <!-- Delete trekking site button -->
					                        {!! Form::open(['class'=>'form-delete','method'=>'delete','url'=>['admin/trekkingSites',$data->id] ])!!}  
					                          {{ Form::button('<span class="icon-trash"></span>', array('class'=>'btn btn-danger', 'type'=>'submit','onclick'=>'return confirm("Are you sure you want to delete?")')) }}
					                        {!! Form::close() !!}
						                </div>
						            </td>
						        </tr>
						    @endforeach
					    </tbody>
					</table>
		        </div>
		    </section><!-- panel ends -->
		  </div>
	  </div>
	      
	  </section>
	</section>
	<!--main content end-->
@stop

