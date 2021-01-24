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
    }
    
}
