<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetsController extends Controller
{
    public function getAnimal(){
        return view("pets");
    }
    public function subAnimal(Request $request){
    echo"<pre>";
    //print_r($request->all());
    print_r($request->input("name"));
    print_r($request->name);
    }
}
