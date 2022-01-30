<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Tag;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postsList = Post::all();

        return view("admin.posts.home", compact("postsList"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
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
        /* $data = $request->all(); */
        /* dd($data); */
        $newPost = new Post();
        $newPost->fill($request->all());
        $newPost->author_id = Auth::User()->id;
        $newPost->save();

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
        $tags = Tag::all();
        return view("admin.posts.show", ["post"=>$post, "tags"=>$tags]);
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
        $post->update($data);

        $post->tags()->sync($data["tags"]);

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
        $post->delete();
        return redirect()->route("admin.posts.index")->with(["status" => "Post cancellato correttamente"]);
    }
}
