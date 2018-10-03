@if(Auth::check() && $user->id !== Auth::user()->id)
    <div class="user-follow-action">
        @if(Auth::user()->isFollowing($user->id))
            <form action="{{route('followers.destroy', $user->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">取消关注</button>
            </form>
        @else
            <form action="{{route('followers.store', $user->id)}}" method="post">
                @csrf
                <button class="btn btn-primary btn-sm">关注</button>
            </form>
        @endif
    </div>
@endif