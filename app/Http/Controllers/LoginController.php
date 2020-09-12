<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    private $user;

    public function __construct(User $user){
        $this->user = $user;
    }


    //Login
    public function loginGet(){
        return view('login.login');
    }


    public function loginPost(Request $request){
        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])){
           // return redirect()->route('newHome');
            $user = Auth::user();
            return view('newHome');
        }
        else{
            return redirect()->route('login.index')->with('thongbao','Đăng nhập thất bại!');
        }
    }


    //Std
    public function registerStudentGet(){
        return view('login.registerStd');
    }

    public function registerStudentPost(Request $request){
        if($request->hasFile('linkCv')){
            return redirect()->route('home.index');
        }
        else{
            return redirect()->route('login.registerStdGet');
        }

    }

    //Hr
    public function registerHrGet(){
        return view('login.registerHr');
    }

    public function registerHrPost(){

    }


}
