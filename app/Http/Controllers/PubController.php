<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Requests\StoreDrink;
class PubController extends Controller
{
    public function getDrink(){
        return view("pub");
    }
    public function subDrink(Request $request){
    echo"<pre>";
    //print_r($request->all());
    print_r($request->input("name"));
    print_r($request->name);
        

    }
  public function newDrink(Request $request){

    $request->validate([
        "name" => "required|min:4|max:10",
        "type" => "required",
        "quantity" => "required"//|digits_between:9,12"
    ],[
    "name.required" => "Név mező kötelező",
    "name.min" => "Minimum 4 karakter",
    "type.required" => "Típus mező kötelező",
    "quantity.required" => "Kiszerelés mező"
    ]);
    return view("pub");
  }
  public function addDrink(StoreDrink $request){
    $request->validated();
    print_r($request->all());
  }
  public function messages(){
    return[
      "name.required" => "Név elvárt"
    ];
  }
}
