@extends('layouts.default')

@section('title','重置密码')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="card">
                    <div class="card-header">重置密码</div>
                    <div class="card-body pb-0">

                        @if(session('status'))
                            <div class="alert alert-success">
                                {{session('status')}}
                            </div>
                        @endif

                        <form action="{{route('password.email')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control{{$errors->has('email')?' is_invalid':''}}" name="email" value="{{old('email')}}" placeholder="邮箱地址">
                                @if($errors->has('email'))
                                    <div class="invalid-feedback">
                                        {{$errors->first('email')}}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">发送密码重置邮件</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop