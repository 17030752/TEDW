<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function blog(){
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
