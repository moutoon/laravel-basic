<!-- layouts.blade.phpを読み込む -->
@extends('layouts')

<!-- layouts.blade.phpの@yield('content')に以下を差し込む -->
@section('content')

    <div class="container mt-4">
        <div>
            <h1 class="h5 mb-4">
                投稿の編集
            </h1>
            
            <!-- UPDATEするときは元データを更新するので、元データを渡す必要がある -->
            <form method="POST" action="{{ route('posts.update', ['post' => $post]) }}">
                <!--csrf対策-->
                {{ csrf_field() }}
                
                <!-- ブラウザのリクエストはGETとPOSTのみだが、
                LaravelはPUTとDELETEも評価しているので以下を記述する必要がある -->
                {{ method_field('PUT') }}
                
                <fieldset class="mb-4">
                    <div class="form-group">
                        <div>
                            <label for="title">
                                タイトル
                            </label>
                            <input
                                id="title"
                                name="title"
                                class="form-control"
                                value="{{ $post->title }}"
                                type="text"
                            >
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <label for="body">
                                本文
                            </label>
                            <textarea
                                id="body"
                                name="body"
                                class="form-control"
                                rows="4"
                            >{{ $post->body }}
                            </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mt-5">
                            <!-- 一つ前の画面に戻るのでposts.show。データを渡す必要がある。 -->
                             <a class="btn btn-secondary" href="{{ route('posts.show', ['post' => $post]) }}">
                                キャンセル
                            </a>
                        
                            <!-- click -> web.php posts -> PostsController@update -->
                            <button type="submit" class="btn btn-primary">
                                更新する
                            </button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

@endsection('content')
