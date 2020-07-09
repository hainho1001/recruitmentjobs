@extends('layouts.company')
@section('title')
	Quản lý tài khoản
@endsection
@section('content')
	<div class="container">
		<div class="row">
			<div class="company_body">
				<div class="col-12">
					<h3 class="mb-4">Thông Tin Công Ty</h3>
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					{!! Form::model($company, ['method'=>'PATCH', 'route'=>['companies.update', $company->id], 'enctype' => 'multipart/form-data']) !!}
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<strong>Tên Công Ty : </strong>
									{!! Form::text('name',null, ['placeholder'=>'Name', 'class'=>'form-control mt-2' ]) !!}
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<strong>Ngành Nghề : </strong>
									{!! Form::text('career',null, ['placeholder'=>'Name', 'class'=>'form-control mt-2' ]) !!}
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<strong>Địa Chỉ : </strong>
									{!! Form::text('address',null, ['placeholder'=>'Address', 'class'=>'form-control mt-2' ]) !!}
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<strong>Sơ Lược Về Công Ty : </strong>
									{!! Form::textarea('profile',null, ['placeholder'=>'Profile', 'class'=>'form-control mt-2', 'style' => 'height:200px' ]) !!}
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<strong>Logo Công Ty: </strong>
									<div class="company_drop mt-2">
										{!!Form::file('logo', ['id' => 'file_logo'])!!}
										<div class="mt-3">
											<img id="img_logo" width="100px" src="{{ URL::to('/') }}/images/{{ $company->logo }}">
							 				<input type="hidden" name="hidden_logo" value="{{ $company->image }}">
										</div>
										
									</div>
						          	
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<strong>Hình Ảnh Công Ty: </strong>
									<div class="company_drop mt-2">
										{!!Form::file('image', ['id' => 'file_image'])!!}
										<div class="mt-3">
											<img id="img_image" width="100px" src="{{ URL::to('/') }}/images/{{ $company->image }}">
											<input type="hidden" name="hidden_image" value="{{ $company->image }}">
										</div>
									</div>
								</div>
							</div>
							</div>
							<div class="col-12">
								<div class="float-right">
									<a class="btn btn-xs btn-primary" href="{{ route('companies.index') }}">Quay lại</a>
									{!!Form::submit('Lưu', ['class' => 'btn company_btn'])!!}
								</div>
								
							</div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
	
@endsection

@section('script')
	<script type="text/javascript">
        function loadLogo(input, id) {
        	id = id || '#img_logo';
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function(e) {
                	$(id)
	                  	.attr('src', e.target.result)
	                  	.width('200px')
	                  	.height('150px');
                }
            
                reader.readAsDataURL(input.files[0]);
            }
        }
        function loadImage(input, id) {
        	id = id || '#img_image';
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function(e) {
                  	$(id)
	                  	.attr('src', e.target.result)
	                  	.width('200px')
	                  	.height('150px');
                }
            
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#file_logo").change(function() {
            loadLogo(this);
        });
        $("#file_image").change(function() {
            loadImage(this);
        });
    </script>
@endsection