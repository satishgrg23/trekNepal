	            

	            <div class="form-group">
	      			{!! Form::label('depature_date','Depature Date:',['class'=>'col-sm-2 control-label']) !!}
	      			<div class="col-sm-10">
	      				{!! Form::date('depature_date',null,['class'=>'form-control','required']) !!}
	      			</div>
	            </div>

	            <div class="form-group">
	      			{!! Form::label('return_date','Return Date:',['class'=>'col-sm-2 control-label']) !!}
	      			<div class="col-sm-10">
	      				{!! Form::date('return_date',null,['class'=>'form-control','required']) !!}
	      			</div>
	            </div>


	            <div class="form-group">
	      			{!! Form::label('cost','Cost:',['class'=>'col-sm-2 control-label']) !!}
	      			<div class="col-sm-10">
	      				{!! Form::text('cost',null,['class'=>'form-control','placeholder'=>'Cost for the trip.','required']) !!}
	      			</div>
	            </div>

	            <div class="form-group">
	      			{!! Form::label('status','Status:',['class'=>'col-sm-2 control-label']) !!}
	      			<div class="col-sm-10">
	      				{!! Form::select('status', ['active','inactive'],null, ['class' => 'form-control']) !!}
	      				
	      			</div>
	            </div>

	            {!! Form::hidden('id',$id) !!}


				<div class="form-group col-sm-2" style="padding-left: 14%;">
					{!! Form::Submit($submitButtonText,['class'=>'btn btn-primary control-label']) !!}
				</div>