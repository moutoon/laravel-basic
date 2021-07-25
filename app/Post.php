<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
        ];
        
    // 属性を保護して、モデルが属性以外の入力値を持たなくなくする
    // title, bodyのみ書き換えることができる、ホワイトリスト
}
