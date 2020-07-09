@extends('layouts.admin')

@section('content')
	<div class="row">
	<div class="col-12">
		<div class="form-group">
			<strong>Name : </strong>
			<p>{{$job->company['name']}}</p>
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<strong>Title : </strong>
			<p>{{$job->title}}</p>
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<strong>Level : </strong>
			<p>{{$job->level}}</p>
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<strong>Career : </strong>
			<p>{{$job->career}}</p>
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<strong>Address : </strong>
			<p>{{$job->address}}</p>
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<strong>Description : </strong>
			<p>{!!$job->description!!}</p>
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<strong>Requirements : </strong>
			<p>{!!$job->requirements!!}</p>
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<strong>Salary : </strong>
			<p>{{$job->salary}}</p>
		</div>
	</div>
	<div class="col-12">
		<a class="btn btn-xs btn-success" href="{{ route('dashboard.jobs.index') }}">Back</a>
	</div>
</div>

@endsection