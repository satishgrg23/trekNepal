@extends('admin.layouts.layout')

@section('body')
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
  <div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa fa-bars"></i> Edit Trekking sites Trip</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="#">Home</a></li>
				<li><i class="fa fa-bars"></i>Edit Trekking sites Trip</li>
			</ol>
		</div>
	</div>
      <!-- page start-->
	<div class="row">
	<div class="col-lg-12">
	  <section class="panel">
	      <header class="panel-heading">
	         Edit Trekking sites Trip
	      </header>
	      <div class="panel-body">
	      	{!! Form::model($trip,['method'=>'PATCH','url'=>['admin/trip',$trip->id],'class'=>'form-horizontal']) !!}
	      		@include('admin.trip.form',['submitButtonText'=>'Update']);
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