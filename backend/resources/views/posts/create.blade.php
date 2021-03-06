<form class="" action="{{ route('posts.store') }}" method="POST">
    {{ csrf_field() }}
    <div><input class="form-control" type="text" name="title" placeholder="タイトル"></div>
    <div><textarea id="" class="form-control" name="body" rows="4" placeholder="本文"></textarea></div>
    <input class="form-control" type="submit" value="送信">
</form>