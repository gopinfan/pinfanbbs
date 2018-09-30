@extends('layouts.default')

@section('title','更新密码')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="card">
                    <div class="card-header">更新密码</div>
                    <div class="card-body pb-0">

                        @if(session('status'))
                            <div class="alert alert-success">
                                {{session('status')}}
                            </div>
                        @endif

                        <form action="{{route('password.update')}}" method="post">
                            @csrf
                            <input type="hidden" name="token" value="{{$token}}">

                            <div class="form-group">
                                <input type="email" class="form-control{{$errors->has('email')?' is_invalid':''}}" name="email" value="{{$email or old('email')}}" required autofocus placeholder="邮箱地址">
                                @if($errors->has('email'))
                                    <div class="invalid-feedback">
                                        {{$errors->first('email')}}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control{{$errors->has('password')?' is_invalid':''}}" name="password" value="" required placeholder="登录密码">
                                @if($errors->has('password'))
                                    <div class="invalid-feedback">
                                        {{$errors->first('password')}}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control{{$errors->has('password_confirmation')?' is_invalid':''}}" name="password_confirmation" value="" required placeholder="确认密码">
                                @if($errors->has('password_confirmation'))
                                    <div class="invalid-feedback">
                                        {{$errors->first('password_confirmation')}}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">修改密码</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop