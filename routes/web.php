<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HotelController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Gestionnaire\ChambreController;
use App\Http\Controllers\Gestionnaire\ReservationController;
use App\Http\Controllers\Gestionnaire\GDashboardController;
use App\Http\Controllers\Gestionnaire\GLoginController;
use App\Http\Controllers\Gestionnaire\GRegisterController;
use App\Http\Controllers\Gestionnaire\GHotelController;
use App\Http\Middleware\AdminMiddleware;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


//les routes  des gestionnaire
Route::get('Gestionnaire/login' , [GLoginController::class , 'index'])->name('Gestionnaire.login') ;
Route::post('Gestionnaire/login/art' , [GLoginController::class , 'login'])->name('Gestionnaire.login.perform') ;
Route::get('Gestionnaire/Register' , [GRegisterController::class, 'index'])->name('Gestionnaire.register');
Route::post('Gestionnaire/Register/perform' , [GRegisterController::class,'create'])->name('Gestionnaire.register.perform');

Route::prefix('Gestionnaire')->middleware('GestionnaireMiddleware')->group(function () {
    Route::get('/EnregistrerHotel' , [GHotelController::class, 'index'])->name('Gestionnaire.EnregistrerHotel') ;
    Route::post('/EnregistrerHotel/perform' , [GHotelController::class, 'create'])->name('Gestionnaire.EnregistrerHotel.perform') ;
    Route::get('/erreur',[GHotelController::class,'indexVerify'])->name('Gestionnaire.index.verify');
    Route::prefix('')->middleware('verify')->group(function () {
        Route::get('/dashboard' , [GDashboardController::class , 'index'])->name('Gestionnaire.dashboard') ;
        Route::get('/AjouterChambre' , [GDashboardController::class , 'chambreIndex'])->name('Gestionnaire.AChambre') ;
        Route::post('/AjouterChambre/perform/{id}' , [ChambreController::class , 'create'])->name('Gestionnaire.AChambre.create');
        Route::get('/Chambre/show/{id}' , [ChambreController::class , 'show'])->name('Gestionnaire.AChambre.show') ;
        Route::post('/Chambre/saveImage/{id}' , [ChambreController::class , 'saveImage'])->name('Gestionnaire.AChambre.saveImage') ;
        Route::get('/Ajouter' , [GDashboardController::class , ' resrvationIndex'])->name('Gestionnaire.AReservation') ;
        Route::get('/AjouterReservation' , [ReservationController::class , 'index'])->name('Gestionnaire.reservation.index');
        Route::get('/logout' , [GLoginController::class , 'logout'])->name('Gestionnaire.logout') ;
    });

}) ;

//les routes des administrateur
Route::get('Administrateur/login' , [LoginController::class , 'index'])->name('Admin.login') ;
Route::post('Administrateur/login/art' , [LoginController::class , 'login'])->name('Admin.login.perform') ;
Route::get('Administrateur/Register' , [RegisterController::class, 'index'])->name('Administrateur.register');
Route::prefix('Administrateur')->middleware('AdminMiddleware')->group(function () {

    Route::get('/dashboard' , [DashboardController::class , 'index'])->name('Admin.dashboard') ;
    Route::get('/dashboard/notifications' , [DashboardController::class , 'notificationIndex'])->name('Admin.dashboard.notification') ;
    Route::get('/dashboard/verifyHotel' , [HotelController::class , 'index'])->name('Admin.verifyHotel.index') ;
    Route::get('/dashboard/verifyHotel/show/{id}' , [HotelController::class , 'show'])->name('Admin.verifyHotel.show') ;
    Route::get('/dashboard/verifyHotel/validation/{id}' , [HotelController::class , 'validatation'])->name('Admin.verifyHotel.validation') ;
    Route::get('/dashboard/verifyHotel/rejet/{id}' , [HotelController::class , 'rejet'])->name('Admin.verifyHotel.rejet') ;
    Route::get('/logout' , [LoginController::class , 'logout'])->name('Admin.logout') ;

}) ;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
