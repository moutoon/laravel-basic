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
}
