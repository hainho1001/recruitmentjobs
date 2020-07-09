@extends('layouts.admin')

@section('content')

	<div class="row">
		<div class="col-12">
			<div class="text-center">
				<h3>Company</h3>
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
			<th>Career</th>
			<th>Address</th>
			<th>Logo</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
		@foreach($companies as $company)
		<tr>
			<!-- <td>{{$company->user['name'] }}</td> -->
			<td>{{$company->name}}</td>
			<td>{{$company->career}}</td>
			<td>{{$company->address}}</td>
			<td><img width="100px" src="{{ URL::to('/') }}/images/{{ $company->logo }}"></td>
			<td><img width="100px" src="{{ URL::to('/') }}/images/{{ $company->image }}"></td>
			<td>
				<a class="btn btn-xs btn-info" href="{{ route('dashboard.companies.show', $company->id) }}">Show</a>
				{!! Form::open(['method' => 'DELETE', 'route' => ['dashboard.companies.delete', $company->id], 'style' =>'display:inline'])!!}
				{!!Form::submit('Delete', ['class' => 'btn btn-danger'])!!}
				{!!Form::close()!!}

			</td>
		</tr>
		@endforeach
	</table>
	<div class="d-flex justify-content-center">
		{!! $companies->links() !!}
	</div>
	
@endsection