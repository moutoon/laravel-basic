<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        // Postモデルからデータをcreated_atの順番で取得し、降順に並び替えて$postsに代入する
        // 5件ずつ
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);;
        // viewのpostsのindexを返す
        return view('posts.index', ['posts' => $posts]);
    }
    
    public function create()
    {
        return view('posts.create');
    }
    
    public function store(Request $request) // Requestを$requestという形で受け取る
    {
        $params = $request->validate([      // バリデーションチェック後に$paramsに代入
            'title' => 'required|max:20',   // titleの文字数は20字まで
            'body' => 'required|max:140',   // bodyの文字数は140文字まで
            ]);
            
        Post::create($params);              // $paramsを保存
        return redirect()->route('top');    // topへリダイレクト
    }
    
    public function show($post_id)                      // $post_idを受け取る
    {
        $post = Post::findOrFail($post_id);             // $post_idに対応するものをPostモデルから取得する
        return view('posts.show', ['post' => $post]);   // posts.showに$postデータを渡す
    }
    
    public function edit($post_id)
    {
        $post = Post::findOrFail($post_id);
        return view('posts.edit', ['post' => $post]);
    }
    
    public function update($post_id, Request $request)
    {
        $params = $request->validate([
            'title' => 'required|max:20',
            'body' => 'required|max:140',
            ]);
            
        $post = Post::findOrFail($post_id); 
        $post->fill($params)->save();       // fillを使うことで複数のプロパティを更新できる
        
        return redirect()->route('top');
    }
    
    public function destroy($post_id)
    {
        $post = Post::findOrFail($post_id); 
        $post->delete();
        
        return redirect()->route('top');
    }


}
