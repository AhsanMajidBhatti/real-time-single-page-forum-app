<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Question');
    }

    public function replies()
    {
        return $this->hasMany('App\Reply');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

}
