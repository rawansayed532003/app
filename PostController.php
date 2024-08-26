<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index( ){
        $post=post::paginate(7);
        return view("posts.index",
        ["posts"=>$post
    ]);
    
    }
    public function show($id){
        $post=post::findOrFail($id);
        return view("posts.show",
        ["posts"=>$post
    ]);
}
public function create()
{
    return view("posts/create");

}
public function store(Request $request){
   
    $request->validate([
        'title'=>'required|string|max:50',
        'content'=>'required|string'

    ]);

    
    $post=post::create([
        'title'=> $request->title,
        'content'=> $request->content,

   ] );
   return redirect('posts');
}
public function edit($id){
    $post=post::findOrFail($id);
    return view("posts/edit",[
       "post"=>$post
    ]);
}
public function update(Request $request, $id){
    // $request-> validate([
    //     'title'=>'required'|'string'|'max:50',
    //     'content'=>'required'|'string',

    // ]);
    $post=post::findOrFail($id)->update([
        'title'=> $request->title,
        'content'=> $request->content,
    ]);
    return redirect('posts');

}
public function delete($id){
    Post::findOrFail($id)->delete();
   
    return redirect('posts');
}
public function latest($num){
 $post=post::orderBy('id','desc')->take($num)->get();
 return view('posts.latest',[
    'post'=> $post,
   
    'num'=>$num

 ]);
}
public function search(Request $request)
{
    $keyword = $request->input('keyword');
    $post = Post::where('title', 'like', "%$keyword%") ->get();

    return view('posts/search', [
        'posts' => $post,
        'keyword'=>$keyword
    ]);
}
}


    


