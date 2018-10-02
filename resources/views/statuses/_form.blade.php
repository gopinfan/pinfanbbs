<div class="status-form">
    <form action="{{route('statuses.store')}}" method="post">
        @include('public._errors')

        @csrf

        <div class="form-group">
            <textarea name="content" id="content" class="form-control" rows="3" placeholder="聊聊身边的事">{{old('content')}}</textarea>

        </div>
        <div class="form-group text-right">
            <button type="submit" class="btn btn-primary btn-sm w-25">发布</button>
        </div>
    </form>
</div>