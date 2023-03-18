<?php

namespace App\Http\Controllers\Gestionnaire;

use App\Http\Controllers\Controller;
use App\Models\Gestionnaire;
use App\Models\Hotel;
use Illuminate\Http\Request;

class GHotelController extends Controller
{
    public function index () {
        return view('Gestionnaire.EnregistrerHotel') ;
    }

    public function create (Request $request) {
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'nbrEtoile'=>['required','integer','max:5'],
            'siret'=>['required', 'string', 'max:255'],
            'adresse' => ['required', 'string', 'max:255' ],
            'codePostale' => ['required'],
            'telephone' => ['required', 'string','min:8' ],
            'latitude' =>['required' ],
            'longitude'=>['required']
      ]);

      $ges = Gestionnaire::Where('user_id',auth()->user()->id)->get()->first();

        Hotel::create([
            'nom' => $request->nom,
            'nbrEtoile'=>$request->nbrEtoile,
            'siret'=>$request->siret,
            'adresse' => $request->adresse,
            'codePostale' => $request->codePostale,
            'telephone' => $request->telephone,
            'latitude' =>$request->latitude,
            'longitude'=>$request->longitude,

        ]);
        $hot = Hotel::Where('siret' , $request->siret)->get()->first();
        $ges->hotel_id = $hot->id ;
        $ges->save();
        return redirect()->route('Gestionnaire.dashboard');
    }

    public function indexVerify () {
        return view('Gestionnaire.VerifyError');
    }
}
