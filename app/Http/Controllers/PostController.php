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

        if(isset($request->super_read)){
            $read = $request->super_read;
        }
        elseif(isset($request->admin_read)){
            $read = $request->admin_read;
        }
        elseif(isset($request->employee_read)){
            $read = $request->employee_read;
        }
        else{
            $read = $request->hr_read;
        }

        if(isset($request->super_write)){
            $write = $request->super_write;
        }
        elseif(isset($request->admin_write)){
            $write = $request->admin_write;
        }
        elseif(isset($request->employee_write)){
            $write = $request->employee_write;
        }
        else{
            $write = $request->hr_write;
        }

        if(isset($request->super_delete)){
            $delete = $request->super_delete;
        }
        elseif(isset($request->admin_delete)){
            $delete = $request->admin_delete;
        }
        elseif(isset($request->employee_delete)){
            $delete = $request->employee_delete;
        }
        else{
            $delete = $request->hr_delete;
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
            $user->is_read = $read;
            $user->is_write = $write;
            $user->is_delete = $delete;
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

    //update
    public function update_user(Request $request){
        $user = new User;
        $id = $request->user;

        $user->exists = true;
        $user->id = $id;
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->type = $request->role;
        $user->username = $request->username;
        if($user->save()){
            echo "ok";
        }
        else{
            echo "An unknown error has occured, please try again later";
        }
    }

    public function delete(Request $request){
        $user = $request->id;
        if(User::where('id', $user)->firstorfail()->delete()){
            echo "ok";
        }
        else{
            echo "There was deleting this item";
        }
    }
}
