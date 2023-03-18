<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index () {
        return view('Admin.login');
    }

    public function login (Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:8',
        ]);
            $credentials = $request->except(['_token']);
            $user = User::where('email',$request->email)->get()->first();
            if (Auth::attempt($credentials)) {
                return redirect()->route('Admin.dashboard')
                            ->withSuccess('Signed in')->with('user',$user);
            }else{
                return redirect()->back();
            }

            return redirect()->route('Admin.login')->withSuccess('Login details are not valid');
    }

    public function logout()
{
    Auth::logout();
    return redirect()->route('welcome');
}
}
