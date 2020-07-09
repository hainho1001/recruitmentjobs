<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{asset('client/css/vendor.min.css')}}" rel="stylesheet">
    <link href="{{asset('client/css/main.min.css')}}" rel="stylesheet">
</head>
<body>
	@yield('content')
<script src="{{asset('client/js/vendor.min.js')}}"></script>
<script src="{{asset('client/js/main.min.js')}}"></script>
</body>

</html>