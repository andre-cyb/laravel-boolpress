<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'content',
        'coverImg',
        'category_id',
        
      ];

    public function user(){
      return $this->belongsTo("App\User", "author_id", "id");
    }
      
    public function category(){
      return $this->belongsTo("App\Category", "category_id", "id");
    }
}
