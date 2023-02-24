<h1>All Posts is:....</h1>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <table class="table">
        <thead>
            <a class="btn btn-danger" href="{{route('post.deleteall')}}" role="button">deleteall</a>
          <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">body</th>
            <th scope="col">pro</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach ($posts as $post)


            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}} </td>
            <td>{{$post->body}}</td>
           <td>
             <a class="btn btn-primary" href="{{route('post.edit' ,$post->id)}}" role="button">edit</a>
           <a class="btn btn-danger" href="{{route('post.delete' ,$post->id)}}" role="button">delete</a>
        </td>
          </tr>
          @endforeach
        </tbody>
      </table>





