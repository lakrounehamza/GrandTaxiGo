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
        $id = Auth::user()->id;
        // dd($id);
        return view('chauffeur.ajouteTrajet',['id'=>$id]);
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

        $lesReservation = Trajet::where('id_chauffeur', '=', $id)->join('reservations','trajets.id','=','reservations.id_trajet')->join('users','reservations.id_passager','=','users.id')->where('reservations.statut','=','encours')->select('trajets.statut as Trastatut','trajets.depart' ,'trajets.arrive','users.name' ,'users.email','reservations.id' , 'reservations.statut as statutRes ','reservations.updated_at' )->get();

        // dd($lesReservations);
         return view('chauffeur.dashboard',['lesReservation' => $lesReservation]);
    } 

    public function accepte (string $id){
        // dd($id);
        $reservation = Reservation::find($id);
        $reservation->update(['statut'=>'accepte']);
        return redirect('dashboard');
    }
    public function  annule (string $id){
        // dd($id);
        
        $reservation = Reservation::find($id);
        $reservation->update(['statut'=>'annule']);
        return redirect('dashboard');


    }

    /**
     * Store a newly created resource in storage.
     */ 
   public function store(Request $request)
{
    // Validate the request data
    $validated = $request->validate([
        'statut' =>'required',
        'depart' => 'required|string|max:255', 
        'arrive' => 'required|string|max:255',
        'id_chauffeur' => 'required',
    ]);
    // dd($validated);

    // Store the validated data into the Trajet model
    Trajet::create($validated);


    // Redirect or return a response
    return redirect('listeTrajet'); // Or you can return something else
}

public function lesTrajet(){
    $id = Auth::user()->id;
    // dd($id);
    $lestrajet = Trajet::where('id_chauffeur','=',$id)->get();
    // dd($lestrajet);
    return view ('chauffeur.listeTrajet',['lestrajet'=> $lestrajet]);
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
        // dd($id);
        $trajet = Trajet::find($id);

        return view('chauffeur.editTrajet',['trajet'=>$trajet]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $trajet = Trajet::find($id);
        dd($id);
        $validated = $request->validate([
        'statut' =>'required',
        'depart' => 'required|string|max:255', 
        'arrive' => 'required|string|max:255',
        'id_chauffeur' => 'required',
        ]);
        // dd($validated);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $trajet = Trajet::find($id);
        $trajet->delete();
        return redirect('dashboard');
    }
}
