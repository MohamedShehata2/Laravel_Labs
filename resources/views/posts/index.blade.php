<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    @include('posts.navbar')
        <a class="btn btn-info" href="{{route('posts.create')}}">create</a>
<table class="table">
  <thead>
    <tr>
        <th scope="col" > ID </th>
      <th scope="col">title</th>
      <th scope="col">posted_by</th>
      <th scope="col">created_at</th>
 <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($posts as $post)
    <tr>
        <th scope="row" > {{$post->id }}</th>
      <th scope="row">{{ $post->title }}</th>
      @if ($post->user!=null)
               <td>{{$post->user->name}}</td>
       @endif
      <td>{{$post->created_at}}</td>
            <td><a class="btn btn-info" href="{{route('posts.show',$post->id)}}">View</a>
                <form action="{{route('posts.update',$post->id)}}" method="get">
                    <button type="submit"class="btn btn-primary" >Edit</button>
                </form>
                <form  action="{{route('posts.delete',$post->id)}}" method="POST">
                    @method('DELETE')
                    @csrf()
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
    </tr>
    @endforeach
  </tbody>
</table>
{{$posts->links()}}
</body>
</html>
