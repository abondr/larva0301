<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function rules() {
        return array(
            'title' => "required||max:255|unique:posts",
            'slug'=> 'unique:posts',
            'body' => "required"
        );
    }

    public function index()
    {
        $posts = Post::paginate(10);
        return view("posts.index",compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = new Post();
        return view("posts.create", compact("post"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid1 = $this->rules();
        $request->validate($valid1);
        $post = new Post();
        $post->title = $request->title;
        $post->slug = str_slug($post->title);
        $post->body = $request->body;
        $post->created_at = date("Y-m-d H:i:s");
        $post->updated_at = date("Y-m-d H:i:s");
        $post->save();
        Session::flash('message', 'Post Added successfully');
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where("slug",$slug)->first();
        return view("posts.show",compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $post = Post::where("slug",$slug)->first();
        return view("posts.edit", compact("post"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::where("post_id",$id)->first();
        $valid1 = $this->rules();
        $valid1['title'] .= ",title,{$post->post_id},post_id";
        $request->validate($valid1);
        $post->title = $request->title;
        $post->slug = str_slug($post->title);
        $post->body = $request->body;
        $post->created_at = date("Y-m-d H:i:s");
        $post->updated_at = date("Y-m-d H:i:s");
        $post->save();
        Session::flash('message', 'Post updated successfully');
        return redirect()->route('post.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $post = Post::where("slug",$slug)->first();
        $post->delete();
        Session::flash('message', 'Post deleted successfully');
        return redirect()->route('post.index');
    }
}
