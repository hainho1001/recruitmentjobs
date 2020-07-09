@extends('layouts.company')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12">
			@if ($message = Session::get('success'))
				<div class="alert alert-success">
					<p>{{ $message }}</p>
				</div>
			@endif
			</div>
			<table class="table">
				<tr>
					<th>Tên</th>
					<th>Số điện thoại</th>
					<th>Hồ sơ</th>
					<th>Action</th>
				</tr>
				@if(count($userjobs))
					@foreach($userjobs as $userjob)
					<tr>
						<td>{{$userjob->user['name']}}</td>
						<td>{{$userjob->phone}}</td>
						<td>
							<a class="btn btn-xs btn-info" href="{{route('userjob.show', $userjob->id)}}">Xem</a>
						</td>
						<td>
							{!! Form::open(['method' => 'DELETE', 'route' => ['userjob.delete', $userjob->id], 'style' =>'display:inline'])!!}
							{!!Form::submit('Delete', ['class' => 'btn btn-danger'])!!}
							{!!Form::close()!!}
						</td>
						
					</tr>
					</div>
					@endforeach
				@else 
					<div class="col-12">
						<h3 class="text-center mt-3 mb-3">Không có người ứng tuyển</h3>
					</div>
				@endif
			</table>
		</div>
	</div>
@endsection