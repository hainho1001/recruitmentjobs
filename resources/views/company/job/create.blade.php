@extends('layouts.company')
@section('title')
	Đăng tuyển
@endsection
@section('content')
	<div class="container">
		<div class="row">
			<div class="company_body">
				<div class="col-12">
					<h3 class="mb-4"> Mô Tả Công Việc</h3>
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					{!! Form::open(['route' => 'jobs.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
						@include('company.job.form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
	
@endsection
