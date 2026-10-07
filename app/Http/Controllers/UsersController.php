<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function users(){

$users= User::query()->get();

return view('users',compact('users'));

}

}
