<?php

namespace App\Http\Controllers;

use App\Models\Palmares;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PalmaresController extends Controller
{
    public function about(){
        $palmares =  Palmares::all()->sortBy('annee');
        $coupe = DB::table('Palmares')->select('coupe')->groupBy('coupe')->get();
        // dd($palmares->palmaresPerCup('Coupe CAF'));
        return view('page.about',compact(['palmares','coupe'])) ;
    }
}
