<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\book;
use App\Models\post;

class bookcontroller extends Controller
{
    public function index( ){
        $book=book::paginate(7);
        return view("books.index",
        ["books"=>$book
    ]);}
    public function show($id){
        $book=book::findOrFail($id);
        return view("books.show",
        ["book"=>$book
    ]);
}
public function create()

{
    $post=post::select('id','title')->get();

    return view("books/create",[
        'post'=>$post
    ]);
       


}
//  public function store(Request $request){
   
//      book::create([
//         'title'=> $request->title,
//         'content'=> $request->content,


//    ] );
//    return redirect('books');
//  }
public function store(Request $request)
{
    $book = new Book();
    $book->title = $request->input('title');
    $book->content = $request->input('content');
    $book->post_id = $request->input('post_id'); // specify a value for post_id
    $book->save();

   return redirect(url('books'));
}
public function edit($id){
    $book=book::findOrFail($id);
    return view("books/edit",[
       "book"=>$book
    ]);
}

public function update(Request $request, $id){

    $book=book::findOrFail($id)->update([
        'title'=> $request->title,
        'content'=> $request->content,
    ]);

    return redirect('books');
}
public function delete($id){
    book::findOrFail($id)->delete();
   
    return redirect('books');
}
}


