<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{asset('client/css/main.min.css')}}" rel="stylesheet">
    <link href="{{asset('client/css/vendor.min.css')}}" rel="stylesheet">
    <script src="{{asset('admin_asset/js/fontawesome.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>

</head>
<body>
	<main class="company_main">
		<div class="profile-wapper">
	        <div class="container">
	            <nav class="profile-nav">
	                <ul>
	                    <li><a class="active" href="{{route('companies.index')}}">Quản Lý hồ sơ</a></li>
	                    <li><a href="{{route('jobs.index')}}">Quản lý việc làm</a></li>
	                    <li>
			                <a href="{{route('jobs.create')}}" class="company_job">
		                    	<i class="fa fa-fw fa-plus"></i>
	                        	<span class="visible-lg-inline">Đăng Tuyển Dụng</span>
		                    </a>
		                </li>
	                    <li><a href="{{ route('logout') }}">Thoát</a></li>
	                </ul>
	            </nav>
	        </div>
	    </div>
		@yield('content')
	</main>
	<div class="text-center footer_content">
        Bản Quyền © Công Ty Cổ Phần Navigos Group Việt Nam <br>
        93 Trần Văn Dư - Mỹ An - Ngũ Hành Sơn - Đà Nẵng
    </div>
<script src="{{asset('client/js/vendor.min.js')}}"></script>
<script src="{{asset('client/js/main.min.js')}}"></script>

<script>
        CKEDITOR.replace( 'description' );
        CKEDITOR.replace( 'requirements' );
</script>
@yield('script')
</body>

</html>