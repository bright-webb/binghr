<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PostController extends Controller
{
    public function add_user(Request $request){
        $user = new User;
        if(User::where(['email'=>$request->email])->count()>0){
            echo "This email address is already existing in the database";
            exit();
        }

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $employee_id = $request->employee_id;
            $user->employee_id = $request->employee_id;
            $user->fname = $request->fname;
            $user->lname = $request->lname;
            $user->email = $request->email;
            $user->mobile = $request->mobile;
            $user->type = $request->role;
            $user->username = $request->username;
            $user->password = Hash::make($request->password);
            $user->create_date = date('d M Y');
            $user->profile_avatar = $filename;

            mkdir("uploads/$employee_id"); // create a new directory with employee ID
            $file->move("uploads/$employee_id", $filename); //move uploaded image to employeed ID directory
        }



        if($user->save()){
            echo "ok";
        }
        else{
            echo "An unknown error has occured, please try again later";
        }
    }
}
