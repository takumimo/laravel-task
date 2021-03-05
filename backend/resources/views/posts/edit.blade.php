@forelse($posts as $post )
<form action="{{ route('posts.update',$post->id) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field("put") }}
    <input class="form-control" type="text" name="title" placeholder="タイトル" value="{{ $post->title }}">
    <textarea id="" class="form-control" name="body" rows="4" placeholder="本文">{{ $post->body }}</textarea>
    <input class="form-control" type="submit" value="送信">
</form>
@empty
<p>ありません。</p>
@endforelse