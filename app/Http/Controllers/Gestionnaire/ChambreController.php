<?php

namespace App\Http\Controllers\Gestionnaire;

use App\Http\Controllers\Controller;
use App\Models\Chambre;
use App\Models\Hotel;
use App\Models\Photo;
use App\Models\User;
use Illuminate\Http\Request;

class ChambreController extends Controller
{


    public function create (Request $request , $id ) {
      $use = User::find($id);
      $request->validate([
        'numeroChambre' => ['required'],
        'libellé' => ['required', 'string', 'max:255'],
        'description' => ['required', 'string'],
      ]);

      $filename = time().'.'.$request->file('image')->extension();

      $path = $request->file('image')->storeAs(
        'PhotoChambre',
        $filename,
        'public'
      );

     $chambre = Chambre::create([
        'numeroChambre'=>$request->numeroChambre ,
        'libellé'=>$request->libellé ,
        'description'=>$request->description ,
        'hotel_id'=>$use->gestionnaire->hotel->id,
        'categorie_id'=>$request->categorie_id
      ]);

      Photo::create([
        'image'=> $path ,
        'chambre_id'=>$chambre->id

      ]);
     return redirect()->back();
    }

    public function show ($id) {
      $chambre =  Chambre::find($id);
      return view('Gestionnaire.ShowChambre')->with('chambre',$chambre);
    }

    public function saveImage (Request $request , $id) {

        $chambre = Chambre::find($id);


        $filename = time().'.'.$request->file('image')->extension();

        $path = $request->file('image')->storeAs(
          'PhotoChambre',
          $filename,
          'public'
        );

        Photo::create([
            'image'=> $path ,
            'chambre_id'=>$chambre->id

          ]);
        return redirect()->back();
    }




}
