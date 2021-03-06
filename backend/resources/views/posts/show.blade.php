@forelse($posts as $post )
<div class="border">
    <div class="text-secondary">{{ $post->title }}</div>
    <div>{!! nl2br(e($post->body)) !!}</div>
    <div class="text-secondary">投稿日:{{ $post->created_at }}</div>
    <a href="{{ route('posts.index') }}">戻る</a>
</div>
@empty
<p>詳細はありません。</p>
<a href="{{ route('posts.index') }}">戻る</a>
@endforelse