<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class AdminController extends Controller
{
    public function loginAdmin(Request $request){
        $data = $request->only('email','password');
        
        if(Auth::attempt($data)){
            return redirect()->route('admin.index');
        }
        else{
            return redirect()->route('login.admin');
        }
    }
    public function logout(){
        if(Auth::check()){
            Auth::logout();
            return redirect()->route('login.admin');
            //return redirect('/')->with('thongbao','Đăng xuất thành công');
        }
    }
}
