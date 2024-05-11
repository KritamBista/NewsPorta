<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Faker\Provider\Base;
use Illuminate\Http\Request;

class FrontendController extends BaseController
{
    //
    function home()
    {
        $post = Post::all()->reverse();
        // $categories = Category::with('post')->get();

        return view('frontend.index', compact('post'));
    }
    function category($id)
    {
        $category = Category::find($id);
        $posts = $category->posts;
        return view('frontend.category', compact('posts'));
    }
    function post($id)
    {
        $post = Post::find($id);
        $comments =Comment::where('post_id' ,$id)->get();
        // return $comment;
        return view('frontend.post', compact('post','comments'));
    }
    function postCommnet(Request $request){
        $comments= new Comment();
        $comments->name =$request->name;
        $comments->Email =$request->Email;
        $comments->comment =$request->comment;
        $comments->post_id = $request->post_id;
        // return $comments;
        $comments->save();
        return redirect()->back();


    }
}
