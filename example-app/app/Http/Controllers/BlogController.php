<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('blogadmin.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name','id');
        return view('blogadmin.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //volver a dejar como estaba $request ->get('category_id') y sin buque y concatenacion de i
        
        $post = new Post();
        $post->title=$request->get('title');
        $post->author=$request->get('author');
        $post->content=$request->get('content');
        $post->category_id=$request ->get('category_id');
        if ($request->hasfile('image')) {
            # code...
            $image=$request->file('image');
            $filename = "img_".uniqid().".".$image->getClientOriginalExtension();
            $post->image=$filename;
            Storage::putFileAs('public',$image,$filename);
        }
        $post->created_at=date('Y-m-d H:i:s');
        $post->updated_at=date('Y-m-d H:i:s');
        $post->save();
        
        
        return redirect('blogadmin')->with('success','Post upload successfull !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
