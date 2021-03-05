@section('title', 'create page')

@section('content')
<form action="/posts" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleFormControlTextarea1">新規投稿</label>
        <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3"></textarea>
        <div class="text-center mt-3">
            <input class="btn btn-primary" type="submit" value="投稿する">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
        </div>
    </div>
</form>
@endsection