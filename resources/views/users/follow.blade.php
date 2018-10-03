@extends('layouts.default')
@section('title', $title)

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">{{$title}}</div>
                    <div class="card-body">
                        @foreach($followUsers as $followUser)
                            <div class="media border-bottom pb-3 mb-3">
                                <a href="{{route('users.show', $followUser->id)}}">
                                    <img src="{{$followUser->gravatar(30)}}" alt="{{$followUser->name}}" class="rounded-circle mr-3">
                                </a>
                                <div class="media-body">
                                    <h5 class="pt-1">
                                        <a href="{{route('users.show', $followUser->id)}}">
                                            {{$followUser->name}}
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        @endforeach

                        {!! $followUsers->render() !!}
                    </div>
                </div>
            </div>
            <div class="col-4">
                @include('users._info', ['user' => $user])
            </div>
        </div>
    </div>
@stop