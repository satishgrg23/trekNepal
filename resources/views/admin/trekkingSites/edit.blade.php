@extends('admin.layouts.layout')

@section('body')
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
  <div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa fa-bars"></i> Edit Trekking sites</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="#">Home</a></li>
				<li><i class="fa fa-bars"></i>Edit Trekking sites</li>
			</ol>
		</div>
	</div>
      <!-- page start-->
	<div class="row">
	<div class="col-lg-12">
	  <section class="panel">
	      <header class="panel-heading">
	         Edit Trekking sites
	      </header>
	      <div class="panel-body">
	      	{!! Form::model($trekkingSites,['method'=>'PATCH','url'=>['admin/trekkingSites',$trekkingSites->id],'class'=>'form-horizontal','files'=>'true']) !!}
	      		<div class="col-sm-10 col-sm-offset-2">
	      			<img src="{{url('uploads/img/'.$trekkingSites->image)}}" alt="" height="100" width="100" class="img img-responsive">
					{!! Form::hidden('oldImage',$trekkingSites->image) !!}	      		
	      		</div>
	      		@include('admin.trekkingSites.form',['submitButtonText'=>'Update']);
	      	{!! Form::close() !!}
	      </div>
	  </section>
	  
	</div>
	</div>
      <!-- page end-->
  </section>
</section>
<!--main content end-->
@stop