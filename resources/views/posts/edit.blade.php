<h1> hello user in create page</h1>

<form action="{{route('post.update' ,$post->id)}}" method="POST">
    @csrf
<input type="text" name="title" value="{{$post->title}}"><br><br>
<input type="text" name="body"  value="{{$post->body}}"><br><br>
<input type="submit" name="submit">
</form>

