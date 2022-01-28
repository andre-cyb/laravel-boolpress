<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'content',
        'author',
        'coverImg',
        'category'
      ];

      public function user(){
        return $this->belongsTo("App\User");
    }
}
