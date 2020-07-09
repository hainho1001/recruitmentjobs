@extends('layouts.company')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<strong>Chức Danh : </strong>
					<p>{{$job->title}}</p>
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					<strong>Cấp Bậc : </strong>
					<p>{{$job->level}}</p>
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					<strong>Ngành Nghề : </strong>
					<p>{{$job->career}}</p>
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					<strong>Địa điểm làm việc : </strong>
					<p>{{$job->address}}</p>
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					<strong>Mô Tả : </strong>
					<div>{!!$job->description!!}</div>
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					<strong>Yêu cầu công việc : </strong>
					<div>{!!$job->requirements!!}</div>
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					<strong>Mức lương : </strong>
					<p>{{$job->salary}}</p>
				</div>
			</div>
			<div class="col-12">
				<a class="btn btn-xs btn-success" href="{{ route('jobs.index') }}">Quay Lại</a>
			</div>
		</div>
	</div>
@endsection
