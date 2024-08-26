<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all categories</title>
</head>
<body>
<h1 style="text-align: center; color: #00698f; font-size: 24px;">All categories</h1>

<a href="{{ url('posts/create') }}" class="btn btn-success">Add category </a>

<!-- <hr> -->
<form method="get" action="{{url('posts/search')}}">
    <div class="input-group">
        <input type="text" name="keyword" class="form-control" placeholder="Search...">
        <div class="input-group-append">
            <button class="btn btn-secondary" type="submit">Search</button>
        </div>
    </div>
</form>


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

<a href="{{ url("posts/edit/$post->id") }}" style="background-color: #337ab7; color: #fff; padding: 10px 20px ; border: none; border-radius: 5px;">Edit</a>
<a href="{{ url("posts/delete/$post->id") }}" style="background-color: #f44336; color: #fff; padding: 10px 20px; border: none; border-radius: 5px;">Delete</a> 


   @endforeach
{{$posts->links()}}
    
</body>
</html>