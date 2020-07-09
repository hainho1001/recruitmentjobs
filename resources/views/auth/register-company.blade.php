@extends('layouts.defaul')
@section('title')
    Đăng ký công ty tuyển dụng việc làm
@endsection
@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<div class="pr-5 pl-5">
					<div  class="text-center pt-3 pb-3">
				        <a class="ec_logo" href="{{url('/')}}">
				        	<img src="{{asset('client/images/logo.png')}}">
				        </a>
				    </div>
					<img width="100%" src="{{asset('client/images/baner.png')}}">
					<p class="ec_item">
						Ra đời vào năm 2020, HongNhung là trang web việc làm lâu đời nhấthuộc Navigos Group. Với văn hóa luôn đặt chất lượng dịch vụ lên hàng đầu, chúng tôi đã liên tục duy trì vị thế dẫn đầu trong lĩnh vực dịch vụ tuyển dụng tại Việt Nam từ những ngày đầu thành lập. Năm 2020s, Navigos Group trở thành một thành viên của en-japan, tập đoàn quốc tế hàng đầu khu vực về các dịch vụ liên quan đến ngành nhân sự.

					</p>
				</div>
				
			</div>
			<div class="col-md-6">
				<div  class="text-center pt-3 pb-3">
			        <a class="ec_logo" href="{{url('/')}}">
			        	<h1>ĐĂNG KÝ</h1>
			        </a>
			    </div>
			    {!! Form::open(['method'=>'POST', 'route'=>'register']) !!}
			    	<div class="ec_ic">
			    		<img src="{{asset('client/images/account-signup.png')}}">
			    		<span>Tài Khoản</span>
			    	</div>
			    	<div class="row form_group">
	                    	<div class="col-md-4">
	                    		{!!Form::label('Họ và tên')!!}
	                    	</div>
	                    	<div class="col-md-8">
	                    		{!!Form::text('name', null, ['class'=>'form-control'])!!}
	                    		@error('name')
		                            <div class="error__login">{{ $message }}</div>
		                        @enderror
	                    	</div>
			    	</div>                   
                    <div class="row form_group">
                    	<div class="col-md-4">
                    		{!!Form::label('Email')!!}
                    	</div>
                    	<div class="col-md-8">
                    		{!!Form::email('email', null, ['class'=>'form-control'])!!}
                    		@error('email')
                                <div class="error__login">{{ $message }}</div>
                            @enderror
                    	</div>
                    </div>
                    <div class="row form_group">
                    	<div class="col-md-4">
                    		{!!Form::label('Điện Thoại')!!}
                    	</div>
                    	<div class="col-md-8">
                    		{!!Form::text('phone', null, ['class'=>'form-control'])!!}
                    		@error('phone')
                                <div class="error__login">{{ $message }}</div>
                            @enderror
                    	</div>
                    </div>
                    <div class="row form_group">
                    	<div class="col-md-4">
                    		{!!Form::label('Mật khẩu')!!}
                    	</div>
                    	<div class="col-md-8">
                    		{!!Form::password('password', ['class'=>'form-control' ])!!}
                    		@error('password')
	                            <div class="error__login">{{ $message }}</div>
	                        @enderror
                    	</div>                        
                    </div>
                    <div class="row form_group">
                    	<div class="col-md-4">
                    		{!!Form::label('Nhập lại mật khẩu')!!}
                    	</div>
                    	<div class="col-md-8">
                    		{!!Form::password('password_confirmation', ['class'=>'form-control' ])!!}  
                    	</div>
                    </div>
                    <div class="col-12">
                    	<p class="ec_shield">
                    		<i class="fa fa-shield" aria-hidden="true"></i>
                    		 Mật mã tại HongNhung luôn được mã hoá và bảo mật tuyệt đối.
	                    </p>
                    </div>
                    {!!Form::text('roles', '2', ['class'=>'ec_hidden'])!!}
                    {!!Form::text('logo', 'user.jpg', ['class'=>'ec_hidden'])!!}
                    {!!Form::text('image', 'bannerc.jpg', ['class'=>'ec_hidden'])!!}
	                <!-- Company -->
                    <div class="ec_ic">
			    		<img style="width: 50px" src="{{asset('client/images/company-signup.png')}}">
			    		<span>Công Ty</span>
			    	</div>
			    	<div class="row form_group">
                    	<div class="col-md-4">
                    		{!!Form::label('Tên Công Ty')!!}
                    	</div>
                    	<div class="col-md-8">
                    		{!!Form::text('name_company', null, ['class'=>'form-control'])!!}
                    		@error('name_company')
                                <div class="error__login">{{ $message }}</div>
                            @enderror
                    	</div>
                    </div>
			    	<div class="row form_group">
                    	<div class="col-md-4">
                    		{!!Form::label('Ngành nghề')!!}
                    	</div>
                    	<div class="col-md-8">
                    		{!!Form::text('career', null, ['class'=>'form-control'])!!}
                    		@error('career')
                                <div class="error__login">{{ $message }}</div>
                            @enderror
                    	</div>
                    </div>
                    <div class="row form_group">
                    	<div class="col-md-4">
                    		{!!Form::label('Địa chỉ')!!}
                    	</div>
                    	<div class="col-md-8">
                    		{!!Form::text('address', null, ['class'=>'form-control'])!!}
                    		@error('address')
                                <div class="error__login">{{ $message }}</div>
                            @enderror
                    	</div>
                    </div>
                    <div class="text-center mt-4">
                    	<button class="btn-red ec_btn">Đăng ký</button>
                    </div>
                {!!Form::close()!!}

                <div class="text-center login-modal__register mt-3">Bạn là nhà tuyển dụng HongNhung? <a href="{{route('login')}}">Đăng nhập</a></div>
			</div>
		</div>
	</div>
@endsection