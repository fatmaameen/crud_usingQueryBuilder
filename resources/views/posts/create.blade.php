<h1> hello user in create page</h1>

<form action="{{route('post.insert')}}" method="POST">
    @csrf
<input type="text" name="title" placeholder="enter your title"><br><br>
<input type="text" name="body" placeholder="enter your body"><br><br>
<input type="submit" name="submit">
</form>

