<div class="row">
	<div class="col-12">
		<div class="form-group">
			<strong>Name : </strong>
			{!! Form::text('name',null, ['placeholder'=>'Name', 'class'=>'form-control' ]) !!}
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<strong>Address : </strong>
			{!! Form::text('address',null, ['placeholder'=>'Address', 'class'=>'form-control' ]) !!}
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<strong>Profile : </strong>
			{!! Form::textarea('profile',null, ['placeholder'=>'Profile', 'class'=>'form-control' ]) !!}
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<strong>Logo : </strong>
          	{!!Form::file('logo', ['id' => 'file_logo'])!!}
			<img id="img_logo" width="100px" src="{{ URL::to('/') }}/images/{{ $company->logo }}">
 			<input type="hidden" name="hidden_logo" value="{{ $company->image }}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<strong>Image : </strong>
			{!!Form::file('image', ['id' => 'file_image'])!!}
			<img id="img_image" width="100px" src="{{ URL::to('/') }}/images/{{ $company->image }}">
			<input type="hidden" name="hidden_image" value="{{ $company->image }}">
		</div>
	</div>
	</div>
	<div class="col-12">
		<a class="btn btn-xs btn-success" href="{{ route('companies.index') }}">Back</a>
		{!!Form::submit('Add New', ['class' => 'btn btn-xs btn-primary'])!!}
	</div>
</div>
