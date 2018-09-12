@extends('layouts.default')

@section('title', $user->name)

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-8"></div>
            <div class="col-4">
                @include('users._info')
            </div>
        </div>
    </div>
@stop
