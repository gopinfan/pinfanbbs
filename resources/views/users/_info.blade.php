<div class="card">
    <div class="card-header">用户信息</div>
    <div class="card-body">
        <div class="user-info text-center">
            <a href="{{route('users.show', $user->id)}}">
                <img src="{{$user->gravatar(100)}}" alt="{{$user->name}}" class="user-gravatar rounded-circle">
            </a>
            <h4 class="user-name mt-3">{{$user->name}}</h4>
        </div>
    </div>
</div>