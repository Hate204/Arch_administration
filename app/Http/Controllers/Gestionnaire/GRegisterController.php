<?php

namespace App\Http\Controllers\Gestionnaire;

use App\Http\Controllers\Controller;
use App\Models\Gestionnaire;
use App\Models\User;
use App\Notifications\RegisterNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GRegisterController extends Controller
{
    public function index () {
        return view('Gestionnaire.register');
    }

    public function create (Request $request) {
      $request->validate([
            'nom' => ['required', 'string', 'max:255',],
            'prenom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255','unique:users'],
            'password' => ['required', 'string', 'min:8'],
      ]);

      User::create([
        'email' => $request->email ,
        'password' => Hash::make($request->password),
        'role'=>1 ,
     ]);

     $use = User::Where('email' , $request->email)->get()->first();

     Gestionnaire::create([
        'nom' => $request->nom ,
        'prenom' => $request->prenom ,
        'user_id'=> $use->id ,
     ]);

     $admins = User::Where('role', 0)->get();
     foreach ($admins as $admin) {
          $admin->notify(new RegisterNotification);
     }

     $credentials = $request->except(['_token' , 'nom' , 'prenom']);

     if(Auth::attempt($credentials)){
        return redirect()->route('Gestionnaire.EnregistrerHotel');
     }

    }


}
