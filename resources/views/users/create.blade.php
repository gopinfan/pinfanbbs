@extends('layouts.default')

@section('title','用户注册')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="card">
                    <div class="card-header">用户注册</div>
                    <div class="card-body">
                        <form action="{{route('users.store')}}" method="post">
                            @include('public._errors')
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="用户名称">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="登录邮箱">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" value="{{old('password')}}" placeholder="登录密码">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password_confirmation" value="{{old('password_confirmation')}}" placeholder="确认密码">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary w-25">注册</button>
                                <a href="" class="btn btn-link">已有账号登录</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop