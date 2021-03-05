@section('title', 'edit page')
@section('content')
<div class="card">
    <form action="/posts/edit" method="post">
    {{ csrf_field() }}
        <div class="card-body">
            <p class="card-text">
                <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3">{{$post->body}}</textarea>
            </p>
            <div class="text-center mt-3">
                <input name="post_id" type="hidden" value="{{$id}}" >
                <input class="btn btn-primary" type="submit" value="変更する">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>
        </div>
    </form>
</div>            
@endsection