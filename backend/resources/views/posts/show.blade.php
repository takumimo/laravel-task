@forelse($posts as $post )
<div class="border my-2 p-2">
    <div class="text-secondary">{{ $post->title }}</div>
    <div class="p-2">{!! nl2br(e($post->body)) !!}</div>
    <div class="text-secondary">投稿日:{{ $post->created_at }}</div>
</div>
@empty
<p>ありません。</p>
@endforelse