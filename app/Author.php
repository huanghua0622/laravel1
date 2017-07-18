<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'author';
    public $timestamps = false;
    protected $fillable = ['name','article_id'];
    public function article()
    {
        return $this->hasOne('App\Article','id','article_id');
    }
}
