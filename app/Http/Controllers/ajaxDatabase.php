<?php

namespace App\Http\Controllers;

use App\Models\cable;
use Illuminate\Http\Request;
use DataTables;
use Response;

class ajaxDatabase extends Controller
{
    //
    
    
    public function show_elements($q){
        $i = 0;
        while($i < count($q)-1){
            if ($q[$i] == $q[$i+1] ){
                array_splice($q, $i+1,1);
                $i = $i - 1;
            }
            $i = $i + 1;
        }

        echo "<option value = 0>" ."Bitte Auswaehlen". "</option>";
        $i = 0;
        while($i < count($q)){
            echo "<option value = $q[$i]>" . $q[$i]. "</option>";
            $i = $i + 1;
        }
    }

//Extract request variable and obtain meaning..
    public function getData(Request $request)
    {
        $linke = $request->linke;
        $isol = $request->isol;
        $lenl = $request->lenl;
        $widthl = $request->widthl;
        $farbel = $request->farbel;
        if ($lenl == null) {    
            $breite = cable::select('widthl')->where('linke', "=" , $linke and 'isol', "=" , $isol)->get();
            $this->show_elements($breite);
        } 
    }
}
/*
        else if (substr($q, -1) == "l") {
            $q = substr($q, 0, -1);
            $q3_iso = substr($q, strpos($q, "//") + 2);
            $q2_breite = substr($q, strpos($q, "/") + 1);
            $q1_verbinder = substr($q, 0, strpos($q, "/"));
            $lange = DB::table('config')->where('verbinder', $q1_verbinder and 'isolierung', $q3_iso and 'breite', $q2_breite)->value('lange')->get();
            $this->show_elements($lange);
        } else if (substr($q, -1) == "f") {
            $q = substr($q, 0, -1);
            $q4_isol = substr($q, strpos($q, "///") + 3);
            $q = substr($q, 0, strpos($q, "///"));
            $q3_lange = substr($q, strpos($q, "//") + 2);
            $q = substr($q, 0, strpos($q, "//"));
            $q2_breite = substr($q, strpos($q, "/") + 1);
            $q1_verbinder = substr($q, 0, strpos($q, "/"));
            $farbe = DB::table('config')->where('verbinder', $q1_verbinder and 'isolierung', $q4_isol and 'breite', $q2_breite
                and 'lange', $q3_lange)->value('farbe')->get();
            $this->show_elements($farbe);

        }
    }
}
