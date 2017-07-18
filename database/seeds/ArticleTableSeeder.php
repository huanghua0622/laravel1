<?php

use Illuminate\Database\Seeder;
use App\Article;
use App\Author;
class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $php = Article::create([
           'title'=>'php'
        ]);
        $java = Article::create([
            'title'=>'java'
        ]);
        $python = Article::create([
           'title'=>'python'
        ]);
        Author::create([
           'name'=>'李白',
            'article_id'=>$php->id,
        ]);
        Author::create([
            'name'=>'李白',
            'article_id'=>$java->id,
        ]);
        Author::create([
            'name'=>'李白',
            'article_id'=>$python->id,
        ]);
    }
}
