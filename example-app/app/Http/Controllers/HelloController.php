<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //para acciones ponemos public y funciones internas private
    public function hello3(){
        return "hello world 3";
    }
    public function hello4(){
        return view('hello4');
    }
    public function hello5($name){
        return "hello dude! ".$name;
    }
    public function hello6($name = "no name"){
        return "hello any" .$name;
    }
}
