@foreach(['danger','warning','success','info'] as $msg)
    @if(session()->has($msg))
        <div class="container mt-3">
            <div class="alert alert-{{$msg}}">
                {{session()->get($msg)}}
            </div>
        </div>
    @endif
@endforeach