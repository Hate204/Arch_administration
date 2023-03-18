<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index () {
        $hotels = Hotel::all();
        return view('Admin.dashboard')->with('hotels' , $hotels) ;
    }

    public function ChambreIndex () {
        return view('Gestionnaire.AjouterChambre');
     }

     public function notificationIndex () {
        return view('Admin.Notifications');
     }


}
