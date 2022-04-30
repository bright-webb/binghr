<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $users = User::get();
        return view("index")->with(['users'=> $users]);
    }

    public function edit($user){
        $users = User::where('id', $user)->get();
        $fname = User::where('id', $user)->value('fname');
        $lname = User::where('id', $user)->value('lname');

        $name = ucwords($fname.' '.$lname);
        return view("edit")->with(['users'=> $users, 'name'=>$name]);
    }

    public function data(){
        $users = User::get();
        return view("data")->with(['users'=> $users]);
    }
}
