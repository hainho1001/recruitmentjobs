@extends('layouts.client')
@section('title')
    Tin tuyển dụng tất cả việc làm
@endsection
@section('content')
	<section class="company-search">
                <div class="container">
                    <h2 class="company-search__head">Cơ hội tìm kiếm việc làm</h2>
                    <p class="text-lg-left text-center">Tìm hiểu văn hoá công ty và chọn cho bạn nơi làm việc phù hợp nhất.</p>
                    <form class="search-widget__form" action="">
                        <div class="row">
                            <div class="col-lg-10 search-col">
                                <div class="row">
                                    <div class="col-lg-4 search-col d-flex">
                                        <div class="ui floating dropdown labeled icon button search-widget__dropdown">
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
                                    <div class="col-lg-4 search-col d-flex">
                                        <div class="ui floating dropdown labeled icon button search-widget__dropdown">
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
                                    <div class="col-lg-4 search-col d-flex">
                                        <div class="search-widget__input">
                                            <input type="text" placeholder="Nhập tên công việc">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 search-col d-flex">
                                <button class="btn-red search-widget__btn">Áp dụng bộ lọc</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
            <!-- END SEARCH -->
            <!-- JOB CONTENT -->
            <section class="jobs">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                        	<div class="company-jobs__head">Việc Làm Cho Bạn</div>
                            <div class="jobs__list">
                                @if(count($jobs))
                            	@foreach($jobs as $job)
                                <div class="jobs__item d-flex">
                                    <div class="jobs__img d-flex align-items-center justify-content-center">
                                        <a href="{{ route ('client.job.show', $job->id)}}"><img src="{{ URL::to('/') }}/images/{{$job->company['logo']}}" alt=""></a>
                                    </div>
                                    <div class="jobs__content">
                                        <div class="jobs__title d-flex">
                                            <a href="{{ route ('client.job.show', $job->id)}}">{{$job->title}}</a>
                                            <!-- <span>(Mới)</span> -->
                                        </div>
                                        <div class="jobs__company">{{$job->company['name']}}</div>
                                        <div class="jobs__meta d-md-flex">
                                            <div class="d-flex">
                                                <span>Lương: </span>
                                                <span class="jobs__money">{{$job->salary}}</span>
                                            </div>
                                            <span class="jobs__separator d-none d-md-block">|</span>
                                            <div class="d-flex">
                                                <span>Khu vực: </span>
                                                <span class="jobs__add">{{$job->address}}</span>
                                            </div>
                                            <span class="jobs__separator d-none d-md-block">|</span>
                                            <div class="d-flex">
                                                <span>Thời gian</span>
                                                <span class="jobs__add">{{$job->created_at}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <a class="jobs__saved d-flex align-items-md-center" href="">
                                        <i class="fa fa-heart"></i>
                                        <span class="d-none d-md-block">Lưu</span>
                                    </a> -->
                                </div>
                                @endforeach
                                @else
                                <p>No data</p>
                                @endif
                                <!-- end item -->
    
                                <!-- PAGINATION -->
                                <div class="d-flex justify-content-center mt-3 mb-5">
                                	{!! $jobs->links() !!}
                                </div>
                                <!-- END PAGINATION -->
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- END JOB CONTENT -->
@endsection