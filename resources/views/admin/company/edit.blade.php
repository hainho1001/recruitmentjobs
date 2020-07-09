@extends('layouts.admin')

@section('content')
	<h3>Edit new Company</h3>
	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whooops!</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit <br>
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	{!! Form::model($company, ['method'=>'PATCH', 'route'=>['companies.update', $company->id], 'enctype' => 'multipart/form-data']) !!}
		@include('admin.company.form')
	{!! Form::close() !!}
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