<?php

namespace App\Http\Controllers\Api\v1;
use App\Http\Controllers\Controller;

use App\Models\CategoryPost;
use App\Models\Post;
use Illuminate\Http\Request;


class CategoryPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryPost = CategoryPost::all();
        return view('admincp.category.index')->with(compact('categoryPost'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admincp.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoryPost = new CategoryPost();
        $categoryPost->title = $request->title;
        $categoryPost->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryPost  $categoryPost
     * @return \Illuminate\Http\Response
     */
    public function show($categoryPost)
    {
       // $category = CategoryPost::find($categoryPost);
        $category = CategoryPost::find($categoryPost);
       // dd($category);
        return view('admincp.category.show')->with(compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryPost  $categoryPost
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryPost $categoryPost)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryPost  $categoryPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$categoryPost)
    {
        $data = $request->all();
        $category = CategoryPost::find($categoryPost);
        $category -> title = $data['title'];
        $category->save();
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryPost  $categoryPost
     * @return \Illuminate\Http\Response
     */
    public function destroy($categoryPost)
    {
        $category = CategoryPost::find($categoryPost);
        $category -> delete();
       // $categoryPost-> delete();
       // dd($category2);
        return redirect()->back();
    }
}
