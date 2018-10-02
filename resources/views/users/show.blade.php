@extends('layouts.default')

@section('title', $user->name)

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        微博列表
                    </div>
                    <div class="card-body">
                        @if(count($statuses)>0)
                            @foreach($statuses as $status)
                                @include('statuses._status')
                            @endforeach

                            {!! $statuses->render() !!}
                        @else
                            <p>还没有发布微博</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-4">
                @include('users._info')
            </div>
        </div>
    </div>
@stop
