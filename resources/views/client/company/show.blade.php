@extends('layouts.defaul')
@section('title')
    {{$company->name}}
@endsection
@section('content')
	<div class="company-wapper">
            <header class="company-header">
                <div class="container">
                    <ul id="top-menu" class="d-flex company-header__nav">
                        <li>
                            <a class="company-header__link" href="#company-banner">
                                <i class="icon-fixed-width fa fa-home"></i>
                                <span class="d-none d-md-block">Đầu Trang</span>
                            </a>
                        </li>
                        <li>
                            <a class="company-header__link" href="#company-jobs">
                                <i class="icon-fixed-width fa fa-briefcase"></i>
                                <span class="d-none d-md-block">Việc làm</span>
                            </a>
                        </li>
                        <li>
                            <a class="company-header__link" href="#company-intro">
                                <i class="icon-fixed-width fa fa-info-circle"></i>
                                <span class="d-none d-md-block">Giới thiệu</span>
                            </a>
                        </li>
                        <li>
                            <a class="company-header__link" href="">
                                <i class="icon-fixed-width fa fa-share-alt"></i>
                                <span class="d-none d-md-block">Chia sẻ</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </header>
            <!-- end menu company -->
            <main>
                <div class="company_pt" id="company-banner">
                    <div style="background: url({{ URL::to('/') }}/images/{{ $company->image }}) center center / cover; height: 270px;"></div>
                    <section class="company-banner">
                        <div class="container">
                            <div class="company-banner__box d-lg-flex justify-content-lg-between align-items-lg-center">
                                <div class="company-banner__content d-lg-flex">
                                    <div class="company-banner__img">
                                        <img src="{{ URL::to('/') }}/images/{{ $company->logo }}" alt="">
                                    </div>
                                    <div class="company-banner__info">
                                        <div class="company-banner__title">{{$company->name}}</div>
                                        <div class="d-lg-flex">
                                            <div class="company-banner__text">{{$company->address}}</div>
                                            <!-- <span class="company-banner__light d-none d-lg-block">|</span> -->
                                            <!-- <a class="company-banner__link" href="www.vietnamworks.com">www.vietnamworks.com</a> -->
                                        </div>
                                        <div class="company-banner__text">{{$company->career}}</div>
                                    </div>
                                </div>
                                <!-- <div class="company-banner__share">
                                    <button class="btn-red">
                                    Theo dõi <span>(50)</span>
                                    </button>
                                </div> -->
                            </div>
                        </div>
                    </section>
                </div>
                <!--end baner -->
                <div class="container">
                    <h2 class="company-title">
                    Việc làm cần thiết cho bạn
                    <span></span>
                    </h2>
                    <section id="company-jobs" class="company-jobs">
                        <div class="company-jobs__head">Cơ Hội Việc Làm Cho Bạn</div>
                        @if(count($company->jobs))
                            <?php $jobs  = $company->jobs;?>
                            @foreach($jobs as $job)
                            <div class="company-jobs__item">
                                <div class="row">
                                    <div class="col-md-10">
                                        <h4 class="company-jobs__title"><a href="{{ route ('client.job.show', $job->id)}}">{{$job->title}}</a></h4>
                                        <div class="company-jobs__meta d-flex">
                                            <div class="company-jobs__text"><i class="fa fa-briefcase"></i>{{$job->level}}</div>
                                            <div class="company-jobs__text"><i class="fa fa-map-marker"></i>{{$job->address}}</div>
                                            <div class="company-jobs__text"><i class="fa fa-calendar-o"></i>{{$job->created_at}}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 d-none d-md-block">
                                        <a href="{{ route ('client.job.show', $job->id)}}" class="company-jobs__btn">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        <!-- end item -->
                        <!-- <div class="company-jobs__btn-bt">
                            <button class="company-jobs__btn">Thêm...</button>
                        </div> -->
                        @else
                        <p>No data</p>
                        @endif
                    </section>
                    <!-- end jobs -->
                    <h2 class="company-title">
                    Giới thiệu
                    <span></span>
                    </h2>
                    <div id="company-intro">
                        <section class="company-intro">
                            <div class="row">
                                <div class="col-lg-8">
                                    <img src="{{ URL::to('/') }}/images/{{ $company->image }}" alt="">
                                </div>
                                <div class="col-lg-4">
                                    <div class="company-intro__title">{{$company->name}}</div>
                                    <div class="company-intro__desc">
                                        {{$company->profile}}
                                    </div>
                                    
                                </div>
                            </div>
                        </section>
                        
                    </div>
                </div>
            </main>
            <!-- FOOTER -->
            <footer class="footer">
                <div class="container">
                    <div class="footer-menu">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="footer-menu__blade">
                                    <h3 class="footer-menu__title">Về HaiNho</h3>
                                    <a href="#" class="footer-menu__link">
                                        <span class="footer-menu__dot"><i></i></span>
                                        <span class="footer-menu__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, consectetur.</span>
                                    </a>
                                    <a href="#" class="footer-menu__link">
                                        <span class="footer-menu__dot"><i></i></span>
                                        <span class="footer-menu__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, consectetur.</span>
                                    </a>
                                    <a href="#" class="footer-menu__link">
                                        <span class="footer-menu__dot"><i></i></span>
                                        <span class="footer-menu__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, consectetur.</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="footer-menu__blade">
                                    <h3 class="footer-menu__title">Contact Information</h3>
                                    <a href="#" class="footer-menu__link">
                                        <span class="footer-menu__icon"><i class="fa fa-home"></i></span>
                                        <span class="footer-menu__text footer-menu__text--address">93 Trần Văn Dư - Mỹ An - Ngũ Hành Sơn - Đà Nẵng</span>
                                    </a>
                                    <a href="#" class="footer-menu__link">
                                        <span class="footer-menu__icon"><i class="fa fa-phone"></i></i></span>
                                        <span class="footer-menu__text">0326 917 446</span>
                                    </a>
                                    <a href="#" class="footer-menu__link">
                                        <span class="footer-menu__icon"><i class="fa fa-envelope"></i></span>
                                        <span class="footer-menu__text">hainho1001@gmail.com</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="footer-menu__blade">
                                    <img src="images/lh3.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <div class="container">
                        <div class="footer__end">
                            <div class="footer__license d-flex align-items-center">Bản quyền thuộc về HaiNho © 2020. Tất cả các quyền được bảo hộ</div>
                            <div class="footer__social">
                                <a class="footer__social-blade" href="#"><i class="fa fa-facebook"></i></a>
                                <a class="footer__social-blade" href="#"><i class="fa fa-google-plus"></i></a>
                                <a class="footer__social-blade" href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- END FOOTER -->
        </div>
@endsection