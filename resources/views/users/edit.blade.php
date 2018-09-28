@extends('layouts.default')

@section('title','编辑用户资料')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="card">
                    <div class="card-header">编辑用户资料</div>
                    <div class="card-body">
                        <div class="pb-3 text-center">
                            <a href="http://gravatar.com/emails" target="_blank">
                                <img src="{{$user->gravatar(100)}}" alt="{{$user->name}}" class="rounded-circle">
                            </a>
                        </div>
                        <form action="{{route('users.update', $user->id)}}" method="post">
                            @include('public._errors')
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" value="{{$user->name}}" placeholder="用户名称">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" value="{{$user->email}}" placeholder="登录邮箱" disabled>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" value="{{old('password')}}" placeholder="登录密码">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password_confirmation" value="{{old('password_confirmation')}}" placeholder="确认密码">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary w-25">更新</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop