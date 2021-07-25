<?php

// use宣言
// これからファイルの内部で使うクラスや関数や定数、
// 名前空間の一部などをインポートするために使う。

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 10)
        ->create();
        // factroyをPostクラスに基づいて10回作成する
    }
}
