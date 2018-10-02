<div class="card">
    <div class="card-header">微博列表</div>
    <div class="card-body">
        <div class="status-feed mt-3">
            @if(count($feedItems)>0)
                @foreach($feedItems as $status)
                    @include('statuses._status', ['user' => $status->user])
                @endforeach

                {!! $feedItems->render() !!}
            @endif
        </div>
    </div>
</div>