<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    public $timestamps = false;
    protected $fillable = ['title'];
    //用来定义一个方法  来关联author模型
    public function author()
    {
        return $this->hasOne('App\Author','article_id','id');

    }
    public function comment()
    {
        return $this->hasMany('App\Comment','article_id','id');
    }
    public function category()
    {
        return $this->belongsToMany('App\Category','article_category','article_id','category_id');

    }
}
