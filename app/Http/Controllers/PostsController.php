<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        // Postモデルからデータをcreated_atの順番で取得し、降順に並び替えて$postsに代入する
        $posts = Post::orderBy('created_at', 'desc')->get();
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
}
