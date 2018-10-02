@extends('layouts.default')

@section('title','首页')
@section('content')
    <div class="container">
        @if(Auth::check())
            <div class="row">
                <div class="col-8">
                    @include('statuses._form')
                    @include('statuses._feed')
                </div>
                <div class="col-4">
                    @include('users._info', ['user' => Auth::user()])
                </div>
            </div>
            @else
            <div class="jumbotron jumbotron-fluid rounded text-center">
                <h1 class="display-4">欢迎光临品凡社区！</h1>
                <p class="lead">品读代码，品味生活</p>

                <div class="mt-5">
                    <a href="{{route('signup')}}" class="btn btn-outline-success">加入社区</a>
                </div>
            </div>
        @endif
    </div>
@stop