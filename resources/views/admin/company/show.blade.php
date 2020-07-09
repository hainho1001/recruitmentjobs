@extends('layouts.admin')

@section('content')
	<div class="row">
	<div class="col-12">
		<div class="form-group">
			<strong>Name : </strong>
			<p>{{$company->name}}</p>
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<strong>Address : </strong>
			<p>{{$company->address}}</p>
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<strong>Profile : </strong>
			<p>{{$company->profile}}</p>
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<strong>Logo : </strong>
			<img id="img_logo" width="100px" src="{{ URL::to('/') }}/images/{{ $company->logo }}">
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<strong>Image : </strong>
			<img id="img_image" width="100%" src="{{ URL::to('/') }}/images/{{ $company->image }}">
		</div>
	</div>
	<div class="col-12">
		<a class="btn btn-xs btn-success" href="{{ route('dashboard.companies.index') }}">Back</a>
	</div>
</div>

@endsection