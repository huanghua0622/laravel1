<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Author;
use App\Http\Requests;

class DemoController extends Controller
{
    public function register()
    {
        //注册方法
        return view('register');
    }
    public function registerok()
    {
    }
    public function demo()
    {
//        $data = Article::where('id','>',3)->get();//all();
//        foreach($data as $v){
//            echo $v->title.'---'.$v->author->name.'<br/>';
//        }
//        $data = Author::all();
//        foreach($data as $v){
//            echo $v->name.'----'.$v->article->title.'<br>';
//        }
//        $data = Article::find(3);
//        dd($data);die;
//        dd($data->comment);die;
//        foreach($data->comment as $v){
//            //多对多的时候是二维数组 所以在遍历的时候需要先调用下  再进行遍历
//            echo $v->content.'<br>';
//        }
        $data = Article::find(3);
//        dd($data->category);die;
        foreach($data->category as $v){
            echo $v->name;
        }
    }
}
