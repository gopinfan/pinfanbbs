@extends('layouts.default')

@section('title', '用户列表')

@section('content')
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">用户列表</div>
            <div class="card-body">
                @foreach($users as $user)
                    <div class="media border-bottom pb-2 pt-2">
                        <a href="{{route('users.show', $user->id)}}">
                            <img src="{{$user->gravatar(48)}}" alt="{{$user->name}}" class="rounded-circle mr-3">
                        </a>
                        <div class="media-body">
                            <h5>
                                <a href="{{route('users.show', $user->id)}}">{{$user->name}}</a>
                                @if($user->is_admin)
                                    <small>[管理员]</small>
                                @endif
                            </h5>
                            {{$user->email}}
                            @can('destroy', $user)
                                <div class="float-right">
                                    <form action="{{route('users.destroy', $user->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-outline-danger">删除</button>
                                    </form>
                                </div>
                            @endcan
                        </div>
                    </div>
                @endforeach

                <div class="pt-3">
                    {!! $users->render() !!}
                </div>
            </div>
        </div>
    </div>
@stop