@extends('layouts.admin')

@section('content')

	<div class="row pt-4 pb-4">
		<div class="col-12">
			<div class="text-center">
				<h3>User Client</h3>
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
			<th>Phone</th>
			<th>Email</th>
			<th>Action</th>
		</tr>
		@foreach($users as $user)
		<tr>
			<td>{{$user->name}}</td>
			<td>{{$user->phone}}</td>
			<td>{{$user->email}}</td>
			<td>
				{!! Form::open(['method' => 'DELETE', 'route' => ['dashboard.users-client.delete', $user->id], 'style' =>'display:inline'])!!}
				{!!Form::submit('Delete', ['class' => 'btn btn-danger'])!!}
				{!!Form::close()!!}

			</td>
		</tr>
		@endforeach
	</table>
	<div class="d-flex justify-content-center">
		{{$users->links()}}
	</div>
	
@endsection