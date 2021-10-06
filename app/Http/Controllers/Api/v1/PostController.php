<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\CategoryPost;
use Storage;
use File;
use Carbon\Carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::with('category')->orderBy('id','desc')->get();
        //dd($post);
        return view('admincp.post.index')->with(compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = CategoryPost::all();
        return view('admincp.post.create')->with(compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post-> title = $request->title;
        $post->short_desc = $request->short_desc;
        $post->desc = $request->desc;
        $post->post_day = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y');
        $post->post_category_id = $request->post_category_id;
        //dd($request->post_category_id);
        if($request['image']){
            $image = $request['image'];
            $ext = $image->getClientOriginalExtension();
            $name = time() .'_'.$image->getClientOriginalName();
            Storage::disk('public')->put($name,FIle::get($image,$ext));
            $post->image = $name;
        }else{
            $post->image = 'default.jpg';
        }
        $post ->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($post)
    {
        
        $post = Post::find($post);
        $category = CategoryPost::all();
        return view('admincp.post.show')->with(compact('post','category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($post)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$post)
    {
        $post = Post::find($post);
        $post-> title = $request->title;
        $post->short_desc = $request->short_desc;
        $post->desc = $request->desc;
        $post->post_day = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y');
        $post->post_category_id = $request->post_category_id;
        //dd($request->post_category_id);
        if($request['image']){
            unlink('public/up/'.$post->image);
            $image = $request['image'];
            $ext = $image->getClientOriginalExtension();
            $name = time() .'_'.$image->getClientOriginalName();
            Storage::disk('public')->put($name,FIle::get($image,$ext));
            $post->image = $name;
        }
        $post ->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($post)
    {
        $path = 'public/up/';
        $post = Post::find($post);
        if(file_exists($path.$post->image)) {
            unlink($path.$post->image);
        }
        $post->delete();

        return redirect()->back();
    }
}
