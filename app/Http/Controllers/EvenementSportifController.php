<?php

namespace App\Http\Controllers;

use App\Models\EvenementSportif;
use Illuminate\Http\Request;

class EvenementSportifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EvenementSportif  $evenementSportif
     * @return \Illuminate\Http\Response
     */
    public function show(EvenementSportif $eventSportif)
    {
 
        $data=[
            'title' => 'Evènnement sportif: '.$eventSportif->nom,
            'description' => 'Détails event: '.$eventSportif->nom,
            'heading' => config('app.name'),
            'eventSportif' => $eventSportif
        ];
        return view('events.details-event', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EvenementSportif  $evenementSportif
     * @return \Illuminate\Http\Response
     */
    public function edit(EvenementSportif $evenementSportif)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EvenementSportif  $evenementSportif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EvenementSportif $evenementSportif)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EvenementSportif  $evenementSportif
     * @return \Illuminate\Http\Response
     */
    public function destroy(EvenementSportif $evenementSportif)
    {
        //
    }
}
