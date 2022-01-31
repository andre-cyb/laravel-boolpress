<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Tag;
use App\Category;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postsList = Post::paginate(3);
        return view("admin.posts.home", compact("postsList"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        /* $data=($request->all()); */
        $categories = Category::all();
        $tags = Tag::all();
        /* $post->coverImg = Storage::put("upload", $data["coverImg"]); */

        return view("admin.posts.create", ['categories'=>$categories, 'tags'=>$tags]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        /* dd($data["coverImg"]); */
        $newPost = new Post();
        $newPost->fill($request->all());
        $newPost->author_id = Auth::User()->id;

        if($request->file("coverImg")){
            $newPost->coverImg = Storage::put("upload", $data["coverImg"]);
        }


        $newPost->save();
        $newPost->tags()->sync($data["tags"]);

        return redirect()->route("admin.posts.show", $newPost->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        /* $tags = Tag::all(); */
        return view("admin.posts.show", ["post"=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view("admin.posts.edit", ['post'=>$post, 'categories'=> $categories, 'tags'=>$tags]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->all();
        
        if(key_exists("tags", $data)){
            $post->tags()->sync($data["tags"]);
        }
        $oldImg = $post->coverImg;
        $post->update($data);
        
        
        if ($request->file("coverImg")) {
            if ($oldImg) {
                Storage::delete($oldImg);
                
            }
            $post->coverImg = Storage::put("upload", $data["coverImg"]);
        };
        $post->save();


        return redirect()->route("admin.posts.show", $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->tags()->detach();
        $post->delete();
        return redirect()->route("admin.posts.index")->with(["status" => "Post cancellato correttamente"]);
    }
}
