@section('title', 'TOP page')

@section('content')
<table>
    <tbody>
        <tr>
            <th>ID</th>
            <th colspan="3">内容</th>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->body }}</td>
                <td>
                <a href="{{ url('posts/'.$post->id) }}">詳細</a>
                @auth
                <form action="/posts/delete/{{$post->id}}" method="POST">
                    {{ csrf_field() }}
                    <input type="submit" value="削除" class="post_del_btn">
                </form>
                @endauth
                </td>
            </tr>
        @endforeach
    </tbody>
</table> 
@endsection