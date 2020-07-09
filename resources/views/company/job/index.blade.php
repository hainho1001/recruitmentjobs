@extends('layouts.company')
@section('title')
	Quản lý việc làm
@endsection
@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="company_body">
				<div class="col-12">
					@if ($message = Session::get('success'))
						<div class="alert alert-success">
							<p>{{ $message }}</p>
						</div>
					@endif
					<h3 class="mb-4"> Quản lý việc làm</h3>
					<table class="table">
						<tr>
							<th>Chức Danh</th>
							<th>Cấp Bậc</th>
							<th>Ngành Nghề</th>
							<th>Địa Điểm Làm Việc</th>
							<th>Action</th>
						</tr>
						@foreach($jobs as $job)
						<tr>
							<td><div class="profile__text">{{$job->title}}</div></td>
							<td><div class="profile__text">{{$job->level}}</div></td>
							<td><div class="profile__text">{{$job->career}}</div></td>
							<td><div class="profile__text">{{$job->address}}</div></td>
							<td>
								<a class="btn btn-info" href="{{route('jobs.show', $job->id)}}">Xem</a>
								<a class="btn btn-primary" href="{{route('jobs.edit', $job->id)}}">Sửa</a>
								{!! Form::open(['method' => 'DELETE', 'route' => ['jobs.destroy', $job->id], 'style' =>'display:inline'])!!}
								{!!Form::submit('Xóa', ['class' => 'btn btn-danger'])!!}
								{!!Form::close()!!}
							</td>
						</tr>
						@endforeach
					</table>
				</div>
				<div class="d-flex justify-content-center">{{$jobs->links()}}</div>
			</div>
		</div>
	</div>
@endsection