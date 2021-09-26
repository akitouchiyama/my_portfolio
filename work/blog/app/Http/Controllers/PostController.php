<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('index')->with(['posts' => $post->getPaginateByLimit()]);  
    }
    
    public function show(Post $post)
    {
        return view('show')->with(['post' => $post]);
    }
    
    public function create()
    {
        return view('create');
    }
    
    public function store(Post $post, PostRequest $request)
    {
        // post配列を変数に入れる
        $input = $request['post'];
        // postインスタンスに入力値を埋めて、保存する(=SQLのinsert文)
        $post->fill($input)->save();
        // 記事詳細画面にリダイレクト
        return redirect ('/posts/' . $post->id);
    }
}
?>