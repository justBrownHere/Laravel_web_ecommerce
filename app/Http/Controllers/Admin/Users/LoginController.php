<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.users.login', [
            'title' => 'Đăng nhập',
        ]);
    }
    public function store(Request $request)
    {
        $this -> validate($request,[
            'email' => 'required|email:filter',
            'password' => 'required'
        ]);

        if (Auth::attempt([
            'email' => $request -> input('email'),
            'password' => $request -> input('password') ,
            // 'level' => 1 
        ], $request -> input('remember') )) 
        {
            return redirect()->route('admin');
        }

        Session::flash('error','Email hoặc Mật khẩu không đúng');
        return redirect()->back();
    }
}
