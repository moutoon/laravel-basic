@extends('layouts')    <!-- layouts.blade.phpを読み込む -->

@section('content')    <!-- layouts.blade.phpの@yield('content')に以下を差し込む -->

    <div class="container mt-4">
        <div class="card mt-4">
            <div class="card-header mb-2">
                Title
            </div>
            <div class="card-body">
                <p class="card-text">
                    body
                </p>
            </div>
            <div class="card-footer">
                <span class="mr-2">
                    投稿日時
                </span>                
            </div>
        </div>
    </div>
    
@endsection('content')