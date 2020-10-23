<?php

namespace App\Http\Controllers;

use App\Airport;
use Illuminate\Http\Request;

class AirportsController extends Controller
{
    public function listAirports(Request $request){
        $keyword = $request->keyword??null;
        $by = $request->by??null;
        if ($keyword){
            if ($by=='anywhere'){
                $airports = Airport::where('country', 'like', "%$keyword%")->Orwhere('city', 'like', "%$keyword%")->Orwhere('name', 'like', "%$keyword%")->get();
            }else{
                $airports = Airport::where($by, 'like', "%$keyword%")->get();
            }

        }else{
            $airports = Airport::limit(20)->get();
        }

        return view('airports', compact('airports','keyword'));
    }
}
