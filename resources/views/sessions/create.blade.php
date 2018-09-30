@extends('layouts.default')

@section('title','用户登录')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="card">
                    <div class="card-header">用户登录</div>
                    <div class="card-body pb-0">
                        <form action="{{route('login')}}" method="post">
                            @include('public._errors')
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="登录邮箱">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" value="{{old('password')}}" placeholder="登录密码">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label for="remember" class="form-check-label">记住我</label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary w-25">登录</button>
                            </div>
                            <div class="form-group text-center border-top pt-3">
                                <a href="{{route('password.request')}}" class="btn btn-link">忘记密码</a>
                                <a href="{{route('signup')}}" class="btn btn-link">还没账号，现在注册</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop