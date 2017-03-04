@extends('admin.layouts.layout')

@section('body')
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
  <div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa fa-bars"></i> Add Photos</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="#">Home</a></li>
				<li><i class="fa fa-bars"></i>Add Photos</li>
			</ol>
		</div>
	</div>
      <!-- page start-->
	<div class="row">
	<div class="col-lg-12">
	  <section class="panel">
	      <header class="panel-heading">
	         {{ $id->name }} (Gallery)
	      </header>
	      <div class="panel-body">
	      	{!! Form::open(array('url' => 'admin/gallery','class'=>'form-horizontal','files'=>'true')) !!}
	      		<div class="form-group">
	      			{!! Form::label('image','Image:',['class'=>'col-sm-2 control-label','required'=>'required']) !!}
	      			<div class="col-sm-10">
	      				{!! Form::file('image[]', array('multiple'=>true),['class'=>'form-control']) !!}
	      				<span class="help-block">You can add multiple images at the same time.</span>

	      				{!! Form::hidden('id',$id->id) !!}
	      			</div>
	            </div>
				<div class="form-group col-sm-2" style="padding-left: 14%;">
					{!! Form::Submit('Add',['class'=>'btn btn-primary control-label']) !!}
				</div>
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