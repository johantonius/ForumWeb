<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function showFormRegister(){
        return view('auth/register');
    }

    public function registered(Request $req){
        
        // $img = $req->file('photo');
        // $imgname = time().'.'.$img->getClientOriginalExtension();
        // $destPath = public_path('/images/profile_picture/');
        // $img->move($destPath, $imgname);

        $user = new User;
        
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = bcrypt($req->password);
        $user->phone = $req->phone;
        $user->address = $req->address;
        $user->gender = $req->gender;
        $user->birthday = $req->birthday;
        $user->role = 'member';
        // $user->picture_path = $imgname;
        $user->picture_path = $req->picture_path;
        
        $user->save();

        return redirect('/');
    }
}
