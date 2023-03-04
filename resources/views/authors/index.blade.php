<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>home</title>
</head>
<body>
    @include('posts.navbar');
<table class="table">
  <thead>
    <tr>
        <th scope="col" >ID</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">created_at</th>
 <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($authors as $author)
    <tr>
        <th scope="row">{{ $author->id }} </th>
      <th scope="row">{{ $author->name }}</th>
      <td>{{$author->email}}</td>
      <td>{{$author->created_at}}</td>
      <td><a   class="btn btn-primary" href="{{route('author.show',$author->id)}}">Show</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
  {{ $authors->links() }}
</body>
</html>
