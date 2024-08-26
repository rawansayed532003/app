<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
</head>
<body>
<a href="{{url('posts')}}" class="btn btn-success">Back to categories</a>

<form method="get" action="{{ url('posts/search') }}">
    <input type="search" name="keyword" value="{{$keyword}}" placeholder="Search..." class="form-control">
    <button type="submit" class="btn btn-primary">Search</button>
</form>

    @foreach ($posts as $post)
  <div class="post">
    <h3>
      <a href="{{ url("posts/show/$post->id") }}" style="text-decoration: none; color: #337ab7;  margin-bottom: 20px;  padding: 20px;">
        {{$post->id}}-{{$post->title}}
      </a>
    </h3>
    <p style="font-size: 18px; color: #666;">
      {{$post->content}}
    </p>
  </div>
    @endforeach

</body>
</html>