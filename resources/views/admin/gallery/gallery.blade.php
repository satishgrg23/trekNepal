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
	        @foreach($trekkingSite as $data)
	           <label class="float-left"> {{ $data->name }} Gallery</label>
	           {!! Form::open(['method'=>'get','url'=>['admin/gallery/create'],'class' => 'form-add-photo' ])!!}
	                {{ Form::button('<span class="icon-plus-sign"></span> Add Photos', array('class'=>'btn btn-success btn-add-photo', 'type'=>'submit')) }}
	                {!! Form::hidden('id',$data->id) !!} 
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


	          @if($image ==1 )
		          @foreach($photo as $photos)
		          		<div class="col-md-3 col-sm-6 sol-xs-12 gallery-image">
		          			<img src="{{url('uploads/gallery/'.$photos->image_name)}}" alt="" class="img img-responsive">
		          		{!! Form::open(['method'=>'delete','url'=>['admin/gallery',$photos->id] ])!!}
                          {{ Form::button('<span class="icon-trash"></span> Delete', array('class'=>'btn btn-danger', 'type'=>'submit','onclick'=>'return confirm("Are you sure you want to delete?")')) }}
                        {!! Form::close() !!}
		          		</div>

		          @endforeach
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

