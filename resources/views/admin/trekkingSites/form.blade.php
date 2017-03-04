	            
				<div class="form-group">
		      			{!! Form::label('image','Image:',['class'=>'col-sm-2 control-label']) !!}
		      			<div class="col-sm-10">
		      				{!! Form::file('image',['class'=>'form-control']) !!}	      				
		      			</div>
		        </div>

	            <div class="form-group">
	      			{!! Form::label('name','Name:',['class'=>'col-sm-2 control-label']) !!}
	      			<div class="col-sm-10">
	      				{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Name of trekking site','required']) !!}
	      			</div>
	            </div>

	            <div class="form-group">
	      			{!! Form::label('description','Description:',['class'=>'col-sm-2 control-label']) !!}
	      			<div class="col-sm-10">
	      				{!! Form::textarea('description',null,['class'=>'form-control ckeditor','id'=>'editor1']) !!}
	      				
	      			</div>
	            </div>

	            <div class="form-group">
	      			{!! Form::label('cost','Cost:',['class'=>'col-sm-2 control-label']) !!}
	      			<div class="col-sm-10">
	      				{!! Form::text('cost',null,['class'=>'form-control','placeholder'=>'Cost of trekking trip','required']) !!}
	      			</div>
	            </div>

	            <div class="form-group">
	      			{!! Form::label('duration','Duration:',['class'=>'col-sm-2 control-label']) !!}
	      			<div class="col-sm-10">
	      				{!! Form::text('duration',null,['class'=>'form-control','placeholder'=>'Duration of trekking','required']) !!}
	      			</div>
	            </div>

	            <div class="form-group">
	      			{!! Form::label('level','Level:',['class'=>'col-sm-2 control-label']) !!}
	      			<div class="col-sm-10">
	      				{!! Form::text('level',null,['class'=>'form-control','placeholder'=>'Difficulty of trekking site','required']) !!}
	      			</div>
	            </div>

	            <div class="form-group">
	      			{!! Form::label('trip_summary','Trip Summary:',['class'=>'col-sm-2 control-label']) !!}
	      			<div class="col-sm-10">
	      				{!! Form::text('trip_summary',null,['class'=>'form-control','placeholder'=>'Trip summary of trekking site','required']) !!}
	      			</div>
	            </div>

	            <div class="form-group">
	      			{!! Form::label('itinerary_details','Itinerary Details:',['class'=>'col-sm-2 control-label']) !!}
	      			<div class="col-sm-10">
	      				{!! Form::textarea('itinerary_details',null,['class'=>'form-control ckeditor','id'=>'editor1']) !!}
	      				
	      			</div>
	            </div>

	            <div class="form-group">
	      			{!! Form::label('price_include_Exclude','Price Include/Exclude:',['class'=>'col-sm-2 control-label']) !!}
	      			<div class="col-sm-10">
	      				{!! Form::textarea('price_include_exclude',null,['class'=>'form-control ckeditor','id'=>'editor1']) !!}
	      				
	      			</div>
	            </div>

	            <div class="form-group">
	      			{!! Form::label('facts','Facts:',['class'=>'col-sm-2 control-label']) !!}
	      			<div class="col-sm-10">
	      				{!! Form::textarea('facts',null,['class'=>'form-control ckeditor','id'=>'editor1']) !!}
	      				
	      			</div>
	            </div>

	            <div class="form-group">
	      			{!! Form::label('equipments','Equipments:',['class'=>'col-sm-2 control-label']) !!}
	      			<div class="col-sm-10">
	      				{!! Form::textarea('equipments',null,['class'=>'form-control ckeditor','id'=>'editor1']) !!}
	      				
	      			</div>
	            </div>

	            <div class="form-group">
	      			{!! Form::label('latitude','Latitude:',['class'=>'col-sm-2 control-label']) !!}
	      			<div class="col-sm-10">
	      				{!! Form::text('latitude',null,['class'=>'form-control','placeholder'=>'Latitude','required']) !!}
	      			</div>
	            </div>

	            <div class="form-group">
	      			{!! Form::label('longitude','Longitude:',['class'=>'col-sm-2 control-label']) !!}
	      			<div class="col-sm-10">
	      				{!! Form::text('longitude',null,['class'=>'form-control','placeholder'=>'Longitude','required']) !!}
	      			</div>
	            </div>

	            <div class="form-group">
	      			{!! Form::label('embeded_map','Embeded Map:',['class'=>'col-sm-2 control-label']) !!}
	      			<div class="col-sm-10">
	      				{!! Form::text('embeded_map',null,['class'=>'form-control','placeholder'=>'Embeded Map','required']) !!}
	      			</div>
	            </div>


				<div class="form-group col-sm-2" style="padding-left: 14%;">
					{!! Form::Submit($submitButtonText,['class'=>'btn btn-primary control-label']) !!}
				</div>