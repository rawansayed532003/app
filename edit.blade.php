<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add posts</title>
</head>
<body>
@include('errors')

    <form method="post" action="{{url("posts/update/$post->id")}}">
        @csrf
    <input type="text"  name="title" value="{{$post->title}}">
    <br>
    <textarea name="content" cols="30" rows="10">{{$post->content}}</textarea>
    <br>
    <input type="submit" value="update">
</form>
    
</body>
</html>