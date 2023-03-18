<?php

namespace App\Http\Controllers\Gestionnaire;

use App\Http\Controllers\Controller;
use App\Models\Gestionnaire;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GLoginController extends Controller
{
    public function index () {
        return view('Gestionnaire.login');
    }

    public function login (Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:8',
        ]);
            $credentials = $request->except(['_token']);
            $user = User::where('email',$request->email)->get()->first();

            if (Auth::attempt($credentials)) {
                return redirect()->route('Gestionnaire.dashboard')
                            ->withSuccess('Signed in')->with('user',$user);
            }else {
                redirect()->back()->with('error','Mot de passe ou mail incorrect');
            }

            return redirect()->route('Gestionnaire.login')->withSuccess('Login details are not valid');
    }

public function logout()
{
    Auth::logout();
    return redirect()->route('welcome');
}
}
