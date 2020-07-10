@extends('layouts.client')
@section('title')
    Trang chủ
@endsection
@section('content')
    <!-- BANNER -->
    <section class="slider-home">
        <div class="search-widget-pos">
            <div class="container">
                <!-- SEARCH WIDGET -->
                <div class="search-widget">
                    <div class="search-widget__title">Tìm Công Việc Mơ Ước. <strong>Nâng Bước Thành Công!</strong></div>
                    <form class="search-widget__form" action="">
                        <div class="row">
                            <div class="col-xl-4 col-lg-3 d-flex">
                                <div class="search-widget__input">
                                    <input type="text" placeholder="Nhập chức danh, vị trí, kỹ năng...">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 d-flex">
                                <div class="ui floating dropdown labeled icon button search-widget__dropdown">
                                    <i class="fa fa-bars search-widget__icon"></i>
                                    <span class="text">Tất cả các ngành nghề</span>
                                    <i class="fa fa-angle-down search-widget__right" aria-hidden="true"></i>
                                    <div class="menu">
                                        <div class="ui icon search input">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                            <input type="text" placeholder="Search tags...">
                                        </div>
                                        <div class="menu-scroll">
                                            <div class="scrolling menu">
                                                <div class="item active">
                                                    Tất cả các ngành nghề
                                                </div>
                                            </div>
                                            <div class="scrolling menu">
                                                <div class="item">
                                                    Important 2
                                                </div>
                                            </div>
                                            <div class="scrolling menu">
                                                <div class="item">
                                                    Important 3
                                                </div>
                                            </div>
                                            <div class="scrolling menu">
                                                <div class="item">
                                                    Important
                                                </div>
                                            </div>
                                            <div class="scrolling menu">
                                                <div class="item">
                                                    Important 2
                                                </div>
                                            </div>
                                            <div class="scrolling menu">
                                                <div class="item">
                                                    Important 3
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-flex">
                                <div class="ui floating dropdown labeled icon button search-widget__dropdown">
                                    <i class="fa fa-map-marker search-widget__icon" aria-hidden="true"></i>
                                    <span class="text">Tất cả các địa điểm</span>
                                    <i class="fa fa-angle-down search-widget__right" aria-hidden="true"></i>
                                    <div class="menu">
                                        <div class="ui icon search input">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                            <input type="text" placeholder="Search tags...">
                                        </div>
                                        <div class="menu-scroll">
                                            <div class="scrolling menu">
                                                <div class="item active">
                                                    Tất cả các địa điểm
                                                </div>
                                            </div>
                                            <div class="scrolling menu">
                                                <div class="item">
                                                    Important 2
                                                </div>
                                            </div>
                                            <div class="scrolling menu">
                                                <div class="item">
                                                    Important 3
                                                </div>
                                            </div>
                                            <div class="scrolling menu">
                                                <div class="item">
                                                    Important
                                                </div>
                                            </div>
                                            <div class="scrolling menu">
                                                <div class="item">
                                                    Important 2
                                                </div>
                                            </div>
                                            <div class="scrolling menu">
                                                <div class="item">
                                                    Important 3
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 d-flex">
                                <button class="btn-red search-widget__btn">Tìm kiếm</button>
                            </div>
                        </div>
                    </form>
                    <div class="text-center d-none d-md-block">
                        <a class="search-widget__link" href="">Đăng tải hồ sơ của bạn</a>
                    </div>
                </div>
                <!-- END SEARCH WIDGET -->
            </div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                @foreach($slide as $key => $sl)
                <div class="carousel-item{{ $key == 0 ? ' active' : '' }}">
                    <div class="slider-home__img" style="background: url({{ URL::to('/') }}/images/{{ $sl->image }}) center center / cover">
                        <div class="slider-home__wapper">
                            <div class="container">

                                <a class="slider-home__link hidden-md" href="{{ route('client.company.show', $sl->id)}}">
                                    <div class="slider-home__bg">
                                        <div class="slider-home__imgs"><img src="{{ URL::to('/') }}/images/{{ $sl->logo }}" alt=""></div>
                                        <div class="slider-home__content">
                                            <div class="slider-home__title">{{$sl->name}}</div>
                                            <div class="slider-home__desc">Apply now</div>
                                        </div>
                                        <div class="slider-home__icon d-flex align-items-center">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- end slider -->
                
            </div>
        </div>
    </section>
    <!-- BANNER -->
    <!-- TOP EMPLOYS -->
    <section class="employer-home">
        <div class="container">
            <h1 class="section-title">Nhà Tuyển Dụng Hàng đầu</h1>
            <div class="row">
                @if(count($companiess))
                    @foreach($companiess as $company)
                    <div class="col-lg-2 col-md-4 col-6 employer-home__col">
                        <a class="employer-home__item d-flex justify-content-center align-items-center" href="{{ route('client.company.show', $company->id)}}">
                            <img src="{{ URL::to('/') }}/images/{{ $company->logo }}" alt="">
                            <!-- <span class="employer-home__tag">Việc mới</span> -->
                        </a>
                    </div>
                    @endforeach
                @else
                <p>no data</p>
                @endif
            </div>
        </div>
    </section>
    <!-- END TOP EMPLOYS -->
    <!-- JOBS HOME -->
    <section class="jobs-home">
        <div class="container">
            <h1 class="section-title">Việc Làm Bạn Sẽ Thích</h1>
            <div class="jobs-home__box">
                
                <ul class="nav nav-tabs d-flex justify-content-center jobs-home__nav" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Việc Làm Tốt Nhất</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Việc Làm Gợi Ý</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                @foreach($jobs as $job)
                                <div class="jobs-home__content">
                                    <div class="jobs-home__img">
                                        <a href="{{ route ('client.job.show', $job->id)}}"><img src="{{ URL::to('/') }}/images/{{ $job->company['logo'] }}" alt=""></a>
                                    </div>
                                    <div class="jobs-home__info">
                                        <a class="jobs-home__title" href="{{ route ('client.job.show', $job->id)}}">{{$job->title}}</a>
                                        <div class="jobs-home__desc">
                                            <span class="jobs-home__span1">{{$job->company['name']}}</span>
                                            <span> - </span>
                                            <span class="jobs-home__span2">{{$job->address}}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                @foreach($jobs as $job)
                                <div class="jobs-home__content">
                                    <div class="jobs-home__img">
                                        <a href="{{ route ('client.job.show', $job->id)}}"><img src="{{ URL::to('/') }}/images/{{ $job->company['logo'] }}" alt=""></a>
                                    </div>
                                    <div class="jobs-home__info">
                                        <a class="jobs-home__title" href="{{ route ('client.job.show', $job->id)}}">{{$job->title}}</a>
                                        <div class="jobs-home__desc">
                                            <span class="jobs-home__span1">{{$job->company['name']}}</span>
                                            <span> - </span>
                                            <span class="jobs-home__span2">{{$job->address}}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END JOBS HOME -->
    <!-- COMPANY HOME -->

    <section class="company-home">
        <div class="container">
            <h1 class="section-title">Nhà Tuyển Dụng Nổi Bật</h1>
            <div id="carouselCompany" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselCompany" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselCompany" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    @if(count($companieso))
                    @foreach($companieso as $key => $company)
                    <div class="carousel-item{{ $key == 0 ? ' active' : '' }}">
                        <div class="company-home__box">
                            <div class="company-home__banner" style="background-image: url({{ URL::to('/') }}/images/{{ $company->image }})"></div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="company-home__item d-flex align-items-center">
                                        <div class="company-home__img">
                                            <a href="{{ route('client.company.show', $company->id)}}"><img src="{{ URL::to('/') }}/images/{{ $company->logo }}" alt=""></a>
                                        </div>
                                        <div class="company-home__content">
                                            <h2 class="company-home__title"><a href="{{ route('client.company.show', $company->id)}}">{{$company->name}}</a></h2>
                                            <p class="company-home__meta">
                                                <em>{{$company->address}}</em>
                                            </p>
                                            <p class="company-home__desc profile__text">{{$company->profile}}</p>
                                            <div class="d-flex justify-content-lg-end justify-content-center">
                                                <a href="{{ route('client.company.show', $company->id)}}" class="btn-red-back">Xem thêm</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <p>Noda</p>
                    @endif
                    <!--end slider -->
                    
                </div>
                <a class="carousel-control-prev" href="#carouselCompany" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                </a>
                <a class="carousel-control-next" href="#carouselCompany" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- END COMPANY HOME -->
    <!-- OTHER EMPLOYS -->
    <section class="other-employer-home" style=" padding-bottom: 40px">
        <div class="container">
            <h1 class="section-title">Nhà Tuyển Dụng Hàng đầu</h1>
            <div class="row">
                @foreach($companiest as $company)
                <div class="col-lg-2 col-4 other-employer-home__col">
                    <a class="other-employer-home__item d-flex justify-content-center align-items-center" href="{{ route('client.company.show', $company->id)}}">
                        <img src="{{ URL::to('/') }}/images/{{ $company->logo }}" alt="{{$company->name}}">
                    </a>
                </div>
                @endforeach
            </div>
            <!-- <div class="d-flex justify-content-lg-end justify-content-center">
                <a class="other-employer-home__btn" href="">Xem tất cả nhà tuyển dụng →</a>
            </div> -->
        </div>
    </section>
    <!-- END OTHER EMPLOYS -->
@endsection