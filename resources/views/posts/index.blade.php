<!-- layouts.blade.phpを読み込む -->
@extends('layouts')

<!-- layouts.blade.phpの@yield('content')に以下を差し込む -->
@section('content')

    <div class="container mt-4">
        <div class="mb-4">
            <!-- click -> web.php posts -> PostsController@create -> create.blade.php -->
            <a href="{{ route('posts.create') }}" class="btn btn-primary">
                投稿を新規作成する
            </a>
        </div>
        @foreach ($posts as $post)
            <div class="card mt-4">
                <div class="card-header mb-2">
                    {{ $post->title }}
                </div>
                <div class="card-body">
                    <p class="card-text">
                        {{ $post->body }}
                    </p>
                    <!-- click -> web.php posts -> PostsController@show -> show.blade.php -->
                    <a class="card-link" href="{{ route('posts.show', ['post' => $post]) }}">
                        詳細を見る
                    </a>
                </div>
                <div class="card-footer">
                    <span class="mr-2">
                        投稿日時 {{ $post->created_at }}
                    </span>                
                </div>
            </div>
        @endforeach
    </div>
    
    <div class="d-flex justify-content-center mb-5">
        {{ $posts->links() }}
    </div>

@endsection('content')
