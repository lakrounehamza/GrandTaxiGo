<?php

namespace App\Http\Controllers;

use App\Models\Trajet;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PassagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lesTrajet = Trajet::join('users','users.id','trajets.id_chauffeur')->select('trajets.*','users.name','users.email')->get();
        return view('passager.home', ['lesTrajet' => $lesTrajet]);
    }
    public function  dashbord(){
        $id = Auth::user()->id;
        // dd($id);
        $lestrajet = Trajet::join('reservations', 'trajets.id', '=', 'reservations.id_trajet')
        ->where('reservations.id_passager', $id)
        ->select('trajets.*')
        ->get();
        // dd($lestrajet);
        return  view('passager.dashboard',['lestrajet'=>$lestrajet]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
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
    public function __construct()
    {
        $this->middleware('role:passager');
    }

}
