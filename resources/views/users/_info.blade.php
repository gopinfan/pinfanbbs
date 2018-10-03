<div class="card">
    <div class="card-header">用户信息</div>
    <div class="card-body">
        <div class="user-info text-center">
            <a href="{{route('users.show', $user->id)}}">
                <img src="{{$user->gravatar(100)}}" alt="{{$user->name}}" class="user-gravatar rounded-circle">
            </a>
            <h4 class="user-name mt-3">{{$user->name}}</h4>
            @include('users._follow')
            <div class="user-stats list-inline border-top pt-3 mt-3">
                <div class="list-inline-item">
                    <a href="{{route('users.followings', $user->id)}}">
                        <strong class="d-block">
                            {{count($user->followings)}}
                        </strong>
                        关注
                    </a>
                </div>
                <div class="list-inline-item border-right border-left px-3">
                    <a href="{{route('users.followers', $user->id)}}">
                        <strong class="d-block">
                            {{count($user->followers)}}
                        </strong>
                        粉丝
                    </a>
                </div>
                <div class="list-inline-item">
                    <a href="{{route('users.show', $user->id)}}">
                        <strong class="d-block">
                            {{$user->statuses()->count()}}
                        </strong>
                        微博
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>