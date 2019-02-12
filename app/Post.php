<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $filable = [
        'title','body'
    ];  

    protected static function published(){
        return self::where('published',1)->get();
    }

    protected static function drafts(){
        return self::where('published',0)->get();
    }

}
