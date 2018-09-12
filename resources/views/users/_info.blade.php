<div class="user-info text-center">
    <a href="{{route('users.show', $user->id)}}">
        <img src="{{$user->gravatar(100)}}" alt="{{$user->name}}" class="user-gravatar rounded-circle">
    </a>
    <div class="user-name h4">{{$user->name}}</div>
</div>