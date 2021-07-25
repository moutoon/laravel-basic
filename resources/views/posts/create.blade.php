<!-- layouts.blade.phpを読み込む -->
@extends('layouts')

<!-- layouts.blade.phpの@yield('content')に以下を差し込む -->
@section('content')

    <div class="container mt-4">
        <div>
            <h1 class="h5 mb-4">
                投稿の新規作成
            </h1>
            
            <form method="POST" action="{{ route('posts.store') }}">
                <!--csrf対策-->
                {{ csrf_field() }}
                
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
                                value="{{ old('title') }}"
                                type="text"
                            >
                            <div class="text-danger">
                                {{ $errors->first('title') }}
                            </div>
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
                            >{{ old('body') }}</textarea>
                            <div class="text-danger">
                                {{ $errors->first('body') }}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mt-5">
                             <a class="btn btn-secondary" href="{{ route('top') }}">
                                キャンセル
                            </a>
                        
                            <!-- click -> web.php posts -> PostsController@store -->
                            <button type="submit" class="btn btn-primary">
                                投稿する
                            </button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

@endsection('content')
