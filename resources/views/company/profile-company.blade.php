@extends('layouts.company')
@section('title')
    Quản lý hồ sơ
@endsection
@section('content')
    <section class="profile">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    @foreach($companies as $company)
                    <aside class="profile-sibar">
                        <div class="profile-sibar__img">
                            <img src="{{ URL::to('/') }}/images/{{ $company->logo }}">
                        </div>
                        <h3 class="profile-sibar__name">{{$company->name}}</h3>
                        <ul>
                            <li>{{$company->career}}</li>
                        </ul>
                        <a class="profile-sibar__btn" href="{{route('companies.edit', $company->id)}}">Cập nhật hồ sơ</a>
                    </aside>
                    @endforeach
                </div>
                
                <!-- end sibar -->
                <div class="col-lg-8">
                    <div  class="profile__box">
                        <h3 class="profile__head">Việc làm</h3>
                        <div class="profile__content">
                            @foreach($jobs as $job)
                            <a href="{{ route('userjob.index', $job->id)}}">
                                <div class="row align-items-center profile__jobs">
                                    <div class="col-sm-9 col-9 ">
                                        <div class="profile__title">{{$job->title}}</div>
                                        <div class="profile__desc">{{$job->created_at}}</div>
                                    </div>
                                    <div class="col-3 btn btn-xs btn-info">Hồ sơ ứng tuyển</div>
                                </div>
                            </a>
                            @endforeach
                            <!--end item -->
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">{{$jobs->links()}}</div>
                </div>
            </div>
        </div>
    </section>
@endsection