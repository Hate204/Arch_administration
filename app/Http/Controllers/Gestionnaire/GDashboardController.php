<?php

namespace App\Http\Controllers\Gestionnaire;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Chambre;
use App\Models\Hotel;
use Illuminate\Http\Request;

class GDashboardController extends Controller
{
    public function index () {
        if(auth()->user()->gestionnaire->hotel == null) {
            return redirect()->route('Gestionnaire.EnregistrerHotel');
        }
        $chambres = Chambre::Where('hotel_id' , auth()->user()->gestionnaire->hotel->id)->get();
        return view('Gestionnaire.dashboard')->with('chambres',$chambres) ;
    }

    public function ChambreIndex () {
        $categories = Categorie::all();
       return view('Gestionnaire.AjouterChambre')->with('categories' , $categories);
    }


    public function  resrvationIndex () {
        return view('Gestionnaire.AjouterResevation');
     }
}

