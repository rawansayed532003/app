<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latest posts</title>
</head>
<body>
    <h1>latest {{$num}} categories:</h1>
    <a href="{{url('posts')}}"style="background-color: #5cb85c; color: #333; margin-bottom: 20px;padding: 10px 20px 10px 10px; border: none; border-radius: 5px;text-align: justify; font-family: Arial, sans-serif; font-size: 18px; font-weight: bold;">Back to categories</a>
 
    @foreach ($post as $posts)
  <div class="posts">
    <h3>
      <a href="{{ url("posts/show/$posts->id") }}" style="text-decoration: none; color: #337ab7;  margin-bottom: 20px;  padding: 20px;">
        {{$posts->id}}-{{$posts->title}}
      </a>
    </h3>
    <p style="font-size: 18px; color: #666;">
      {{$posts->content}}
    </p>
  </div>


   @endforeach
    
</body>
</html>
