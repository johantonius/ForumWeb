<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Auth
{
    public function showFormLogin(){
        return view('login');
    }
    public function login(Request $req){
        $rememberMe = false;
        if($req->remember == true){
            $rememberMe = true;
        }
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password], $rememberMe)) {
            return redirect('home');
        }
        return back();

    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}


// use Notifiable;

// /**
//  * The attributes that are mass assignable.
//  *
//  * @var array
//  */
// protected $fillable = [
//     'name', 'email', 'password', 'phone', 'address', 'gender', 'picture_path',
//     'birthday', 'role'

// ];

// /**
//  * The attributes that should be hidden for arrays.
//  *
//  * @var array
//  */
// protected $hidden = [
//     'password', 'remember_token',
// ];