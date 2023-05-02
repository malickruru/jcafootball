<?php

namespace App\Http\Controllers;

use App\Models\Matchs;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function home(){
        // palmares
        $trophe = DB::table('Palmares')->where('classement','=',1)->get(); 
        // prochain match
        $match = Matchs::all()->where('date','>',now())->first(); 
        
        return view('page.accueil',compact(['trophe','match']));
    }

    public function match(){
        $next = Matchs::all()->where('date','>',now())->first(); 
        $fixtures = Matchs::all();
        $rating = DB::table('Classement')->get()->last();
        return view('page.match',compact(['next','fixtures','rating']));
    }
    
}
