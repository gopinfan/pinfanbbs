@extends('layouts.default')

@section('title','首页')
@section('content')
    <div class="container text-center">
        <div class="jumbotron jumbotron-fluid rounded">
            <h1 class="display-4">欢迎光临品凡社区！</h1>
            <p class="lead">品读代码，品味生活</p>

            <div class="mt-5">
                <a href="{{route('signup')}}" class="btn btn-outline-success">加入社区</a>
            </div>
        </div>
    </div>
@stop