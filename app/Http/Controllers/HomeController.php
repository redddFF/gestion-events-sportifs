<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EvenementSportif;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $eventSportifs=EvenementSportif::paginate();
        $data=[
            'title' => 'Evènnements sportifs',
            'description' => 'Liste des évènnements sportifs',
            'heading' => config('app.name'),
            'eventSportifs' => $eventSportifs
        ];
        return view('home.index',$data);
    }
}
