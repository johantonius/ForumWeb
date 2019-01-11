<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;


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
       $validate = Validator::make($req->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'phone'=>'required|numeric',
            'gender'=>'required',
            'address'=>'required',
            'gender'=>'required',
            'birthday'=>'required|date',
            'picture_path'=>'required|mimes:jpeg,bmp,png'
        ]);
        if($validate->fails()){
            return redirect('/registerform')->withErrors($validate);
        }
        else{
            if ($req->hasFile('picture_path')) {

                $picture=$req->file('picture_path');
                $path=$picture->store('pictures');
                $destination= base_path().'/public/pictures';
                $req->file('picture_path')->move($destination,$path);
            }
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
            $user->picture_path =$path;

        
        $user->save();
        }
        return redirect('/');
    }
}
