<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand header__logo p-0" href="{{ url('/') }}">
            <img src="{{asset('client/images/logo.png')}}">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Trang chủ <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('client.job.index') }}">Tất cả việc làm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('client.company.index') }}">Công Ty</a>
                </li>
            </ul>
            <ul class="navbar-nav align-items-center">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login')}}">
                            <i class="fa fa-fw fa-lg fa-sign-in"></i>
                            Đăng Nhập
                        </a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('register')}}">
                                Đăng Ký
                            </a>
                        </li>
                    @endif
                @else
                    <ul class="navbar-nav header-logged__nav align-items-center">
                        <div class="nav-link dropdown">
                            <button class="header-logged__toggle dropdown-toggle d-flex align-items-center" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="header-logged__img" src="{{asset('client/images/user.jpg')}}" alt="">
                                <span class="header-logged__name">{{ Auth::user()->name }}</span>
                            </button>
                            <div class="header-logged__menu dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div class="header-logged__head">Quản lý nghề nghiệp</div>
                                <!-- <a class="dropdown-item" href="#"><i class="fa fa-fw fa-lg fa-heart"></i> Việc làm của tôi</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-fw fa-lg fa-tachometer"></i>Quản lý việc làm</a> -->
                                <a class="dropdown-item" href="#">Tài khoản</a>
                                <a class="dropdown-item" href="{{ route('logout') }}">Thoát</a>
                                
                            </div>
                        </div>
                    </ul>
                @endguest
                <li class="nav-item header-employer__w100">
                    <a class="nav-link header-employer" href="{{ route('registerCompany') }}">
                        <div class="header-employer__title">Nhà tuyển dụng</div>
                        <div class="header-employer__desc">Đăng Tuyển & Kiếm Nhân Tài</div>
                    </a>
                </li>
            </ul>
        </div>

    </nav>
</header>