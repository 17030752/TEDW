<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

use App\Models\Post1;

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
        $posts = array();
         for ($i=0; $i < 30; $i++) {
             # code...
             $posts[]= new Post1($i,
             "title".$i,
             "author".$i,
             "corrego@gamil.com",
             "date".$i,
             "content".$i,
             "image".$i);
         }
        
        /*foreach(Post::all() as $post){
         echo $post->title , ' - ',$post->author,'<br>';
         }*/
         
         return view('blog',['posts' => $posts]);
        
    }
    public function products(){
        return view("products");
    }
    public function services(){
        return view("services");
    }
}
