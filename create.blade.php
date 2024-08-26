<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add posts</title>
</head>
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form method="post" action="{{url('posts/store')}}">
        @csrf
        <input type="text" name="title" style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; width: 25%;" placeholder="Enter title">

<br>

<textarea name="content" cols="30" rows="10" style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; width: 25%; height: 150px;"></textarea>
    <br>
    <input type="submit" value="Add" style="background-color: #4CAF50; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
</form>
    
</body>
</html>