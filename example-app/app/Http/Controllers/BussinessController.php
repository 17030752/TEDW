<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Category;
class BussinessController extends Controller
{
    //
    public function home(){
        return view("Index");
    }
    function contact(){
        return view('Contact');
    }
    function about(){
        return view('About');
    }
    public function blog($category_id = null){
        if ($category_id==null) {
             $posts = Post::all();
        }else{
            $posts = Post::where('category_id',$category_id)->get();
        }
       
        $categories = Category::all();
        return view('Blog',compact('posts','categories','category_id'));
    }
    public function services(){
        $services = DB::table('services')
        ->select('id','name','description')
        ->get();
        //return view('Services',['services' => $services]);
        return view('Services',compact('services'));
    }
}
