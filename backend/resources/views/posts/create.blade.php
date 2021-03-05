<form class="" action="{{ route('posts.store') }}" method="POST">
    {{ csrf_field() }}
    <input class="form-control" type="text" name="title" placeholder="タイトル">
    <textarea id="" class="form-control" name="body" rows="4" placeholder="本文"></textarea>
    <input class="form-control" type="submit" value="送信">
</form>