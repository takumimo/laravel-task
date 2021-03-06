<a href="{{ route('posts.create') }}">＋ 新規投稿</a>

@forelse( $posts as $post )
<div class="border">
    <div class="text-secondary">{{ $post->title }}</div>
    <div>{!! nl2br(e($post->body)) !!}</div>
    <div class="text-secondary">投稿日:{{ $post->created_at }}</div>
    <div class="text-secondary">編集日:{{ $post->updated_at }}</div>
    <a href="{{ route('posts.show',$post->id) }}">詳細</a>
    <a href="{{ route('posts.edit',$post->id) }}">編集</a>
    <form action="{{ route('posts.destroy',$post->id) }}/" method="POST" style="display:inline-block;">
        {{ csrf_field() }}
        {{ method_field("delete") }}
        <button type="submit">削除</button>
    </form>
</div>
@empty
<p>投稿はありません</p>
@endforelse