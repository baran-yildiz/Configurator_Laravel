<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cable;

class form extends Controller
{
    //
    public function saveData(Request $request){
        $cable = new cable;
        cable::create($request->all());
        return view("Configurator");
        //return $art_nr1 + "/" + $art_nr2;
        /*$cable->artnr = "1";
        $cable->verbinder = $request->input('linke');
        $cable->isoliert = $request->input('isol');
        $cable->lanege = $request->input('lenl');
        $cable->breite = $request->input('widthl');
        $cable->farbe = $request->input('farbel');
        $cable->beschreibung = $request->input('beschlink');

        $rechte = $request->input('rechte');
        $isor = $request->input('isor');
        $lenr = $request->input('lenr');
        $widthr = $request->input('widthr');
        $farber = $request->input('farber');
        //$beschright = $request->input('beschright');

        $cable->save();
        return view("Configurator");
        //DB::insert('cable')->where('verbinder', $linke and 'isolierung', $isol
        //and 'lange', $lenl and 'breite', $widthl and 'farbe', $farbel)->value('artikel_nr');
        
        //$art_nr2 = DB::table('cable')->where('verbinder', $rechte and 'isolierung', $isor
        //    and 'lange', $lenr and 'breite', $widthr and 'farbe', $farber)->value('artikel_nr');
        
        //return $art_nr1 + "/" + $art_nr2; 
      */  
    }
    
}
