<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class SiteController extends Controller
{
    //methods
    public function home(){
        return view("home");
    }
    public function contact(){
        return view("contact");
    }
    public function blog(){
        // for ($i=0; $i < 30; $i++) {
        //     # code...
        //     $posts[]= new Post($i,
        //     "title".$i,
        //     "author".$i,
        //     "corrego@gamil.com",
        //     "date".$i,
        //     "content".$i,
        //     "image".$i);
        // }
        // return view("blog",['posts'=>$posts]);
        // foreach(Post::all() as $post){
        //     echo $post->title , ' - ',$post->author,'<br>';
        // }
        $posts = Post::all();
        $categories = Category::all();
        return view('Blog',compact('posts','categories'));
    }
    public function products(){
        return view("products");
    }
    public function services(){
        return view("services");
    }
}
