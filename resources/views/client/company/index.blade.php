@extends('layouts.client')
@section('title')
    Công ty tuyển dụng việc làm
@endsection
@section('content')
	<main>
            <section class="company-search">
                <div class="container">
                    <h2 class="company-search__head">Khám phá văn hoá công ty</h2>
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
                                            <input type="text" placeholder="Nhập tên công ty">
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
            <section class="company-result">
                <div class="container">
                    <div class="company-jobs__head">Công ty dành cho bạn</div>
                    <div class="row">
                        @foreach($companies as $company)
                        <div class="col-lg-4 col-md-6">
                            <div class="company-list__item">
                                <a href="{{ route('client.company.show', $company->id)}}">
                                    <div class="company-list__img" style="background: url({{ URL::to('/') }}/images/{{ $company->image }}) center center / cover; height: 270px;">
                                </a>
                                    <span class="company-list__opening">Đang tuyển</span>
                                </div>
                                <div class="company-list__info d-flex justify-content-between">
                                    <div class="company-list__content">
                                        <a class="company-list__title" href="{{ route('client.company.show', $company->id)}}">{{$company->name}}</a>
                                        <div class="company-list__text">{{$company->career}}</div>
                                        <div class="company-list__text">{{$company->address}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!--end item -->
                    </div>
                    <!-- PAGINATION -->
                    <div class="d-flex justify-content-center mt-3 mb-5">
                        {!! $companies->links() !!}
                    </div>
                    <!-- END PAGINATION -->
                </div>
            </section>
        </main>
@endsection