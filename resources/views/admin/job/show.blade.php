@extends('layouts.admin')

@section('content')
	<!-- BANNER -->
    <section class="jobs-detail-banner" style="background: url({{ URL::to('/') }}/images/{{$job->company['image']}}) center center / cover; height: 270px;">
        <div class="jobs-detail-banner__overlay d-none">
        </div>
    </section>
    <!-- END BANNER -->
	<!-- JOBS HEADER -->
	<div class="container">
        <div class="jobs-detail">
        	<div class="jobs-detail__share d-flex justify-content-end">
                    <a class="jsPopupShare d-flex" href="javascript:void(0)" data-html="<div class='popup-share'>
				    <a class='facebook' href='#'><i class='fa fa-facebook'></i></a>
				    <a class='google' href='#'><i class='fa fa-google-plus'></i></a>
				    <a class='twitter' href='#'><i class='fa fa-twitter'></i></a>
				    <a class='linkedin' href='#'><i class='fa fa-linkedin'></i></a>
				</div>"><span class="d-none d-lg-block">Chia sẻ</span><i class="fa fa-share-alt"></i></a>
            </div>
		    <section class="jobs-detail-header">
		        <div class="row">
		            <div class="col-lg-2">
		                <div class="jobs-detail-header__img">
		                    <img src="{{ URL::to('/') }}/images/{{ $job->company['logo'] }}" alt="">
		                </div>
		            </div>
		            <div class="col-lg-8">
		                <div class="jobs-detail-header__info">
		                    <div class="jobs-detail-header__title">{{$job->title}}</div>
		                    <div class="d-flex">
		                        <div class="jobs-detail-header__name">{{$job->company['name']}}</div>
		                        <div class="jobs-detail-header__light">-</div>
		                        <div class="jobs-detail-header__add">{{$job->address}}</div>
		                    </div>
		                    <div class="jobs-detail-header__money">{{$job->salary}}</div>
		                </div>
		            </div>
		            <div class="col-lg-2">
                        @if(empty($checkRegistJob))
                            <a class="btn-red" href="{{route('client.user-job.index', $job->id)}}">Nộp đơn</a>
                        @else
                            <div class="btn-apply">Đã nộp đơn</div>
                        @endif
		            </div>
		        </div>
		    </section>
		    <!-- JOBS CONTENT -->
            <section class="jobs-detail-content">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Thông tin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#company" role="tab" aria-controls="profile" aria-selected="false">Công ty</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="jobs-detail-content__tab tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="jobs-detail-content__box">
                                    <h2 class="jobs-detail-content__title">Mô tả công việc</h2>
                                    <div>
                                        {!!$job->description!!}
                                    </div>
                                    
                                </div>
                                <div class="jobs-detail-content__box">
                                    <h2 class="jobs-detail-content__title pt-5">Yêu cầu công việc</h2>
                                    <div>
                                        {!!$job->requirements!!}
                                    </div>
                                        
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="jobs-detail-content__sibar">
                                    <div class="summary-item d-flex align-items-center">
                                        <div class="summary-icon">
                                            <i class="icon icon1"></i>
                                        </div>
                                        <div class="summary-content">
                                            <div class="summary-content__text">Ngày Đăng Tuyển</div>
                                            <div class="summary-content__date">{{$job->created_at}}</div>
                                        </div>
                                    </div>
                                    <div class="summary-item d-flex align-items-center">
                                        <div class="summary-icon">
                                            <i class="icon icon2"></i>
                                        </div>
                                        <div class="summary-content">
                                            <div class="summary-content__text">Cấp Bậc</div>
                                            <div class="summary-content__date">{{$job->level}}</div>
                                        </div>
                                    </div>
                                    <div class="summary-item d-flex align-items-center">
                                        <div class="summary-icon">
                                            <i class="icon icon3"></i>
                                        </div>
                                        <div class="summary-content">
                                            <div class="summary-content__text">NGÀNH NGHỀ</div>
                                            <div class="summary-content__date">{{$job->career}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end tab -->
                    <div class="jobs-detail-content__tab tab-pane fade show" id="company" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-lg-8">
                                <img src="{{ URL::to('/') }}/images/{{ $job->company['image'] }}">
                                <div class="jobs-detail-content__box mt-3">
                                    {{ $job->company['profile'] }}
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="jobs-detail-content__sibar">
                                    <div class="summary-item d-flex align-items-center">
                                        <div class="summary-icon">
                                            <i class="icon icon6"></i>
                                        </div>
                                        <div class="summary-content">
                                            <div class="summary-content__text">ĐỊA ĐIỂM</div>
                                            <div class="summary-content__date">{{ $job->company['address'] }}</div>
                                        </div>
                                    </div>
                                    <div class="summary-item d-flex align-items-center">
                                        <div class="summary-icon">
                                            <i class="icon icon7"></i>
                                        </div>
                                        <div class="summary-content">
                                            <div class="summary-content__text">NGÀNH NGHỀ</div>
                                            <div class="summary-content__date">{{ $job->company['career'] }}</div>
                                        </div>
                                    </div>
                                    <div class="summary-item d-flex align-items-center">
                                        <div class="summary-icon">
                                            <i class="icon icon8"></i>
                                        </div>
                                        <div class="summary-content">
                                            <div class="summary-content__text">LIÊN HỆ</div>
                                            <div class="summary-content__date">{{ $job->user['name'] }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END JOBS CONTENT -->

		</div>
	</div>
    <!-- END JOBS HEADER -->
	<div class="col-12 text-center mb-3">
		<a class="btn btn-xs btn-success" href="{{ route('dashboard.jobs.index') }}">Back</a>
	</div>
</div>

@endsection