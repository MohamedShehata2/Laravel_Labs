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
<fieldset>
    <legend>TitlePost</legend>
            <table class="table">
            <thead>
                <tr>
                    <th>title</th>
                    <th>content</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                </tr>
            </tbody>
        </table>
</fieldset>
<br>
 <br>
<fieldset>
    <legend>Author</legend>
            <table class="table">
            <thead>
                <tr>
                    <th>name</th>
                    <th>email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->user->email }}</td>
                </tr>
            </tbody>
        </table>
</fieldset>


</body>
</html>
