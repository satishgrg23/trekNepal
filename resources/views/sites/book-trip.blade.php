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
			</ul>
		</div>
	</div>

	<div class="row">
		<h3>Booking Details</h3>
		<hr>
		{!! Form::open(array('url' => 'bookTrip','class'=>'form-horizontal')) !!}
            <div class="form-group">
      			{!! Form::label('trek_name','Trip name:',['class'=>'col-sm-1 control-label']) !!}
      			<div class="col-sm-6">
      				{!! Form::text('trek_name',$trekking->name,['class'=>'form-control','placeholder'=>'Name of Trip','disabled','required']) !!}
      			</div>
            </div>
      		<div class="form-group">
      			{!! Form::label('fullname','Full name:',['class'=>'col-sm-1 control-label']) !!}
      			<div class="col-sm-6">
      				{!! Form::text('fullname',$customer->name,['class'=>'form-control','placeholder'=>'Fullname','required']) !!}
      			</div>
            </div>
            <div class="form-group">
      			{!! Form::label('address','Address:',['class'=>'col-sm-1 control-label']) !!}
      			<div class="col-sm-6">
      				{!! Form::text('address',null,['class'=>'form-control','placeholder'=>'Address','required']) !!}
      			</div>
            </div>
            <div class="form-group">
      			{!! Form::label('phone','Phone no:',['class'=>'col-sm-1 control-label']) !!}
      			<div class="col-sm-6">
      				{!! Form::text('phone',null,['class'=>'form-control','placeholder'=>'Phone no','required']) !!}
      			</div>
            </div>
            <div class="form-group">
      			{!! Form::label('email','Email:',['class'=>'col-sm-1 control-label']) !!}
      			<div class="col-sm-6">
      				{!! Form::email('email',$customer->email,['class'=>'form-control','placeholder'=>'Email','required']) !!}
      			</div>
            </div>
            <div class="form-group">
      			{!! Form::label('no_of_person','No of person:',['class'=>'col-sm-1 control-label']) !!}
      			<div class="col-sm-6">
      				{!! Form::number('no_of_person',null,['class'=>'form-control','placeholder'=>'Number of person','required']) !!}
      			</div>
            </div>
            <div class="form-group">
      			{!! Form::label('comment','Comment:',['class'=>'col-sm-1 control-label']) !!}
      			<div class="col-sm-6">
      				{!! Form::textarea('comment',null,['class'=>'form-control','rows'=>'5','placeholder'=>'Message']) !!}
      			</div>
            </div>
            {!! Form::hidden('tid',$trekking->id) !!}
            {!! Form::hidden('cid',$customer->id) !!}
            <div class="form-group">
            	{!! Form::Submit('Book',['class'=>'btn btn-primary']) !!}
            </div>
	    {!! Form::close() !!}
	</div>

</section>	
	
		

	





@stop