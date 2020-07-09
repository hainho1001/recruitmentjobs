@extends('layouts.client')
@section('content')
	<div class="login__top-header">
	</div>
	<div class="login-modal">
        <div class="modal-dialog" role="document">
           
            <div class="modal-content login-modal__content resume__p">
                @if(session('status'))
                    <ul class="alert alert-danger text-center">
                        <li>
                            <h3 class="text-danger">Xin chúc mừng!</h3>
                        </li>
                        <li>{{session('status')}}</li>                            
                    </ul>
                @endif
                <div class="p-4">Bạn đang ứng tuyển cho vị trí
                    <strong>{{$job->title}}</strong>
                </div>
                <div class="modal-body p-0">
                    <div class="resume-header">
                        <div class="row">
                            <div class="col-sm-3 text-center">
                                <img class="resume-img" src="{{asset('client/images/user.jpg')}}">
                            </div>
                            <div class="col-sm-9 align-self-center">
                                <div>{{$user->name}}</div>
                            </div>
                        </div>
                    </div>
                    {!! Form::open(['route' => ['client.user-job.post', $job->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="resume-body">
                        <div class="row pb-4 pt-4">
                            <label class="col-sm-3 text-right">Email</label>
                            <div class="col-sm-9">{{$user->email}}</div>
                        </div>
                        <div class="row pb-4">
                            <label class="col-sm-3 text-right">Số điện thoại</label>
                            <div class="col-sm-9">
                                {!!Form::text('phone',null, ['class'=>'input-control', 'placeholder'=>'Nhập số điện thoại liên lạc' ])!!}
                                @error('phone')
                                    <div class="error__login">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row pb-4">
                            <label class="col-sm-3 text-right">Resume</label>
                            <div class="col-sm-9">
                                {!!Form::file('resume')!!}
                                @error('resume')
                                    <div class="error__login">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        
                    </div>
                    <div class="resume-bot d-flex justify-content-end">
                        <a href="{{ route ('client.job.show', $job->id)}}" class="resume-btn">Trở Về</a>
                        @if(empty($checkRegistJob))
                            <button class="btn-red resume-w">Nộp Đơn</button>
                        @else
                            <div class="btn-apply">Đã nộp đơn</div>
                        @endif
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection