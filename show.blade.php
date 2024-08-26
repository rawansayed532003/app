<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all posts</title>
</head>
<body>
 
<h3 style="font-size: 24px; font-weight: bold; color: #333; margin-bottom: 10px;">{{$posts->id}}-{{$posts->title}}</h3>

<p style="font-size: 16px; color: #666; text-align: justify;">{{$posts->content}}</p>

<h5 style="font-family: Arial, sans-serif; font-size: 18px; font-weight: bold; color: blue; margin-bottom: 10px;">subcategory:</h5>

<ul style="list-style: none; padding: 0; margin: 0;">
    @foreach ($posts->books as $book )
    <li style="margin-bottom: 10px;">
        <a style="text-decoration: none; color: #2F4F4F;" href={{url("books/show/$book->id")}}>{{$book->title}}</a>
    </li>
    @endforeach
</ul>

<a href="{{url('posts')}}" 
   style="background-color: #337ab7; 
          color: #fff; 
          padding: 10px 20px; 
          border: none; 
          border-radius: 5px; 
          text-decoration: none; 
          cursor: pointer; 
          display: inline-block; 
          margin-top: 20px;">Back</a>


    
</body>
</html>