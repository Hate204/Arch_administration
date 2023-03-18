<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gestionnaire;
use App\Models\Hotel;
use App\Models\User;
use App\Notifications\HotelRejetNotification;
use App\Notifications\HotelValidationNotification;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index () {
        $utilisateur = User::Where('verified',0)->get();
        return view('Admin.HotelVerify')->with('utilisateurs',$utilisateur);
    }

    public function show ($id) {
      $gestionnaire = Gestionnaire::Where('user_id',$id)->get()->first();
      $hotel = Hotel::Where('id',$gestionnaire->hotel_id)->get()->first();;
      return view('Admin.FicheValidation')->with('gestionnaire',$gestionnaire)->with('hotel',$hotel);
    }

    public function validatation ($id) {
       $use = User::find($id);
       $use->verified = 1 ;
       $use->save();
       $use->notify(new HotelValidationNotification);
       return redirect()->back();
    }

    public function rejet ($id) {
        $use = User::find($id);
        $use->verified = 2;
        $use->save();
        $use->notify(new HotelRejetNotification);
        return redirect()->back();
     }
}
