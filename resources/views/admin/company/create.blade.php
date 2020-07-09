@extends('layouts.admin')

@section('content')
	<h3>Add new Company</h3>
	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whooops!</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit <br>
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	{!! Form::open(['route' => 'dashboard.companies.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
		<div class="row">
	<div class="col-12">
		<div class="form-group">
			<strong>Name : </strong>
			{!! Form::text('name',null, ['placeholder'=>'Name', 'class'=>'form-control' ]) !!}
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<strong>Career : </strong>
			{!! Form::text('career',null, ['placeholder'=>'Career', 'class'=>'form-control' ]) !!}
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
			<img id="img_logo" width="100px" src="">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<strong>Image : </strong>
			{!!Form::file('image', ['id' => 'file_image'])!!}
			<img id="img_image" width="100px" src="">
		</div>
	</div>
	</div>
	<div class="col-12">
		<a class="btn btn-xs btn-success" href="{{ route('dashboard.companies.index') }}">Back</a>
		{!!Form::submit('Add New', ['class' => 'btn btn-xs btn-primary'])!!}
	</div>
</div>

	{!! Form::close() !!}
@endsection