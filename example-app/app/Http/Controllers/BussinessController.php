<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;
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
 function readmore($post_id){
    $posts = Post::where('id',$post_id)->get();
    $comments = Comment::where('post_id',$post_id)->get();
    return view('Readmore',compact('posts','comments'));
}
function form_comment($post_id){
       
        return view('commentadmin.create',compact('post_id'));
}
function comment(Request $request){
     $comment = new Comment();
        $comment->author=$request->get('author');
        $comment->comment=$request->get('comment');
        $comment->post_id=$request->get('post_id');
        $comment->created_at=date('Y-m-d H:i:s');
        $comment->updated_at=date('Y-m-d H:i:s');
        $comment->save();
        return view('Blog');
}
public function services(){
    $services = DB::table('services')
    ->select('id','name','description')
    ->get();
        //return view('Services',['services' => $services]);
    return view('Services',compact('services'));
}
}
