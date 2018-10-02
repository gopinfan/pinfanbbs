<div class="media border-bottom mb-3">
    <a href="{{route('users.show', $user->id)}}">
        <img src="{{$user->gravatar(64)}}" alt="{{$user->name}}" class="mr-3 rounded-circle">
    </a>

    <div class="media-body">
        @can('destroy', $status)
            <form action="{{route('statuses.destroy', $status->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger float-right">删除</button>
            </form>
        @endcan
        <h5>
            {{$user->name}}
            <small class="text-muted">{{$status->created_at->diffForHumans()}}</small>
        </h5>
        <p>
            {{$status->content}}
        </p>
    </div>
</div>