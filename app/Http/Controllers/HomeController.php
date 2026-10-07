<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

public function  home (string $name){

return view('home',compact('name'));


}


}
