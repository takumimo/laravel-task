<a class="btn btn-outline-success"  href="{{ route('posts.create') }}">＋ トピックを作る</a>

@forelse( $posts as $post )
<div class="border my-2 p-2">
    <div class="text-secondary">{{ $post->title }}</div>
    <div class="p-2">{!! nl2br(e($post->body)) !!}</div>
    <div class="text-secondary">投稿日:{{ $post->created_at }}</div>
    <div class="text-secondary">編集日:{{ $post->updated_at }}</div>
    <a class="btn btn-outline-primary" href="{{ route('posts.show',$post->id) }}">詳細</a>
    <a class="btn btn-outline-success" href="{{ route('posts.edit',$post->id) }}">編集</a>
    <form action="{{ route('posts.destroy',$post->id) }}/" method="POST" style="display:inline-block;">
        {{ csrf_field() }}
        {{ method_field("delete") }}
        <button class="btn btn-outline-danger" type="submit">削除</button>
    </form>
</div>
@empty
<p>投稿はありません</p>
@endforelse