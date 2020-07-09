@extends('layouts.admin')

@section('content')

	<div class="row">
		<div class="col-12">
			<div class="text-center">
				<h3>Job</h3>
			</div>
		</div>
	</div>	
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif
	<table class="table">
		<tr>
			<th>Name</th>
			<th>Title</th>
			<th>level</th>
			<th>career</th>
			<th>address</th>
			<th>Action</th>
		</tr>
		@foreach($jobs as $job)
		<tr>
			<td>{{$job->company['name'] }}</td>
			<td>{{$job->title}}</td>
			<td>{{$job->level}}</td>
			<td>{{$job->career}}</td>
			<td>{{$job->address}}</td>
			<td>
				<a class="btn btn-xs btn-info" href="{{ route('dashboard.jobs.show', $job->id) }}">Show</a>
				{!! Form::open(['method' => 'DELETE', 'route' => ['dashboard.jobs.delete', $job->id], 'style' =>'display:inline'])!!}
				{!!Form::submit('Delete', ['class' => 'btn btn-danger'])!!}
				{!!Form::close()!!}

			</td>
		</tr>
		@endforeach
	</table>
	<div class="d-flex justify-content-center">
		{!! $jobs->links() !!}
	</div>
	
@endsection