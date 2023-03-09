<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    //
    public function dashboard()
    {
        $new = DB::table('news')->get();
        return view('admin.dashboard')->with(compact('new'));
    }

    public function add()
    {
        return view('admin.add-products');
    }

    public function home()
    {
        $new = DB::table('news')->get();
        return view('home')->with(compact('new'));
        
    }

    public function getLogin()
    {
        return view('admin.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin/dashboard')
                        ->withSuccess('Signed in');
        }
   
        return redirect("admin/getLogin")->withSuccess('Login details are not valid');
    }

    public function getRegister()
    {
        return view('admin.register');
    }

    public function postRegister(Request $request)
    {
        DB::table('users')->insertGetid([
            'name'=> $request->input('name'),
            'email'=> $request->input('email'),
            'password'=> Hash::make($request['password'])
        ]);
        return redirect('/');
    }

    public function getLogout()
    {
        Session::flush();
        Auth::logout();
        return view('admin.login');
    }
}
