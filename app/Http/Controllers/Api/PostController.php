<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    function index(){
        $posts = Post::with("category")->get();
            
        foreach ($posts as $post) {
            $cuttedBody = strip_tags($post->content);
            $post["body"] = strlen($cuttedBody) > 100 ? substr($cuttedBody, 0, 100) . "..." : $cuttedBody;
        }
        return $posts;
    }
}
