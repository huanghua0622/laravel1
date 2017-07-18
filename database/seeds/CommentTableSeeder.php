<?php

use Illuminate\Database\Seeder;
use App\Comment;
class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
           'content'=>'php春天来了 都学习php',
            'article_id'=>3,
        ]);
        Comment::create([
            'content'=>'php春天来了',
            'article_id'=>3,
        ]);
        Comment::create([
            'content'=>'都学习php',
            'article_id'=>3,
        ]);
//        Comment::create([
//           [
//               'content'=>'php春天来了 都学习php',
//               'article_id'=>4,
//           ] ,
//            [
//                'content'=>'php春天来了',
//                'article_id'=>4,
//            ]
//        ]);

    }
}
