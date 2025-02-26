<?php

namespace App\Http\Controllers;
use App\Models\Reservation;
use App\Models\Trajet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChauffeurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('chauffeur.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function  dashbord(){
        $id = Auth::user()->id;
        // $mesTrajet = Trajet::where('id_chauffeur', '=', $id)->get();
        // dd($mesTrajet);
        // $lesReservation = Reservation::whereIn('id_trajet', $mesTrajet->pluck('id'))->get();

        // $lesReservations = Trajet::where('id_chauffeur', '=', $id)
        // ->join('reservations', 'id_trajet', '=', 'reservation.id_trajet')
        // ->join('passagers', 'reservation.id_passager', '=', 'id')
        // ->select('trajets.depart', 'passager.*')
        // ->get();
        // $lesReservations = Trajet::where('id_chauffeur', '=', $id)
        // ->join('reservations', 'trajets.id', '=', 'reservations.id_trajet') // Ajout du préfixe de table
        // ->select('trajets.*', 'reservations.*') // Sélection explicite des colonnes
        // ->get();

        $lesReservation = Trajet::where('id_chauffeur', '=', $id)->join('reservations','trajets.id','=','reservations.id_trajet')->join('users','reservations.id_passager','=','users.id')->select('trajets.statut as Trastatut','trajets.depart' ,'trajets.arrive','users.name' ,'users.email','reservations.id' , 'reservations.statut as statutRes ','reservations.updated_at' )->get();

        // dd($lesReservations);
         return view('chauffeur.dashboard',['lesReservation' => $lesReservation]);
    } 

    /**
     * Store a newly created resource in storage.
     */
    public function accepte(Request $request){
        
    }
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
