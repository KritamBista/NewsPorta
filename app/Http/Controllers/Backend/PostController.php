<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;

class PostController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all()->reverse();
        return view('Backend.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('Backend.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $post = new Post();
        $post->tittle = $request->tittle;
        $post->description = $request->description;
        $post->tags = $request->tags;
        $post->meta_description = $request->meta_description;
        $post->meta_keywords = $request->meta_keywords;
        uploadFile($request, $post, "image");



        $post->save();
        $post->categories()->attach($request->category_id);
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post=Post::find($id);
        $categories=Category::all();
        return view('Backend.post.edit',compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::find($id);
        $post->tittle = $request->tittle;
        $post->description = $request->description;
        $post->tags = $request->tags;
        $post->meta_description = $request->meta_description;
        $post->meta_keywords = $request->meta_keywords;
        uploadFile($request, $post, "image");
         $post->update();
        $post->categories()->sync($request->category_id);

        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
