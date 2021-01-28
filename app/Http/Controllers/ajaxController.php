<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Response;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class ajaxController extends Controller
{
    public function index(Request $request){
    	$verbinder = $request->verbinder;
        $isoliert = $request->isoliert;
        $width = $request->breite;
        $length = $request->lange;
        $name = $request->name;
        if ($width == 0 && $name == "isol") {    
            $breite = DB::select('select distinct widthl from cables where linke = ? and isol = ? order by widthl', [$verbinder, $isoliert]);
            $breite = json_encode($breite);
            return response()->json($breite);
        }else if ($width == 0 && $name == "isor") {    
            $breite = DB::select('select distinct widthr from cables where rechte = ? and isor = ? order by widthr', [$verbinder, $isoliert]);
            $breite = json_encode($breite);
            return response()->json($breite);
        }else if ($length == 0 && $name == "widthl") {    
            $lange = DB::select('select distinct lenl from cables where linke = ? and isol = ? and widthl = ? order by lenl', [$verbinder, $isoliert, $width]);
            $lange = json_encode($lange);
            return response()->json($lange);
        }else if ($length == 0 && $name == "widthr") {    
            $lange = DB::select('select distinct lenr from cables where rechte = ? and isor = ? and widthr = ? order by lenr', [$verbinder, $isoliert, $width]);
            $lange = json_encode($lange);
            return response()->json($lange);
        }else if ($name == "lenl") {    
            $farbe = DB::select('select distinct farbel from cables where linke = ? and isol = ? and widthl = ? and lenl = ? order by farbel', [$verbinder, $isoliert, $width, $length]);
            $farbe = json_encode($farbe);
            return response()->json($farbe);
        }else if ($name == "lenr") {    
            $farbe = DB::select('select distinct farber from cables where rechte = ? and isor = ? and widthr = ? and lenr = ? order by farber', [$verbinder, $isoliert, $width, $length]);
            $farbe = json_encode($farbe);
            return response()->json($farbe);
        }
        
	}

}
