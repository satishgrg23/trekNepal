@extends('admin.layouts.layout')

@section('body')
	<!--main content start-->
	<section id="main-content">
	  <section class="wrapper">
	  <div class="row">
	    <div class="col-lg-12">
	      <h3 class="page-header"><i class="fa fa fa-bars"></i> Trekking Sites Trip</h3>
	      <ol class="breadcrumb">
	        <li><i class="fa fa-home"></i><a href="#">Home</a></li>
	        <li><i class="fa fa-bars"></i>Trekking Sites Trip</li>
	      </ol>
	    </div>
	  </div>
	      <!-- page start-->
	  <div class="row">
	  <div class="col-lg-12">
	    <section class="panel">
	        <header class="panel-heading">
	        @foreach($trekkingSite as $res)
	           <label class="float-left"> {{ $res->name }} Trip</label>
	           {!! Form::open(['method'=>'get','url'=>['admin/trip/create'],'class' => 'form-add-photo' ])!!}
	                {{ Form::button('<span class="icon-plus-sign"></span> Add Trip', array('class'=>'btn btn-success btn-add-photo', 'type'=>'submit')) }}
	                {!! Form::hidden('id',$res->id) !!} 
            	{!! Form::close() !!}
            @endforeach
	        </header>
	        <div class="panel-body">
	          @if (Session::has('flash_msg'))
	            <div class="alert alert-danger">
	              <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
	              {{ Session::get('flash_msg') }}
	            </div>
	          @endif


	          @if($data ==1 )
		          
		          		<table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
						    <thead>
						        <tr>
						            <th>id</th>
						            <th>tid</th>
						            <th>Depature Date</th>
						            <th>Return Date</th>
						            <th>Cost</th>
						            <th>Status</th>
						            <th>Action</th>
						        </tr>
						    </thead>

						    <tbody>
							    @foreach($trip as $trips )
							        <tr>
							            <td>{{ $trips->id }}</td>
							            <td>{{ $trips->tid }}</td>
							            <td>{{ $trips->depature_date }}</td>
							            <td>{{ $trips->return_date }}</td>
							            <td>{{ $trips->cost }}</td>
							            <td>
							            	@if( $trips->status==0 )
							            		<button class="btn btn-success">Active</button>
							            	@else
							            		<button class="btn btn-danger">Inactive</button>
							            	@endif
							            </td>
							            <td>
							            <div class="btn-group"> 

							            	{!! Form::open(['method'=>'get','url'=>['admin/trip/'.$trips->id.'/edit'],'class' => 'form-inline' ])!!}
								                {{ Form::button('<span class="icon-edit"></span>', array('class'=>'btn btn-success', 'type'=>'submit')) }}
								                {!! Form::hidden('id',$trips->tid)!!} 
							            	{!! Form::close() !!}

							            	{!! Form::open(['method'=>'delete','url'=>['admin/trip',$trips->id],'class' => 'form-inline' ])!!}
                  								{{ Form::button('<span class="icon-trash"></span>', array('class'=>'btn btn-danger', 'type'=>'submit','onclick'=>'return confirm("Are you sure you want to delete?")')) }}
	                       					{!! Form::close() !!}
	                       				</div>
							            </td>
							        </tr>
							    @endforeach
						    </tbody>
						</table>	
	      	  @endif
				


	           
	        </div>
	    </section>
	    
	  </div>
	  </div>
	      <!-- page end-->
	  </section>
	</section>
	<!--main content end-->
@stop

