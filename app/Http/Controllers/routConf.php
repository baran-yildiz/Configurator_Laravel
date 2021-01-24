<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class routConf extends Controller
{
    //Routing configurator Homepage
    public function routCon()
    {
        return view("Configurator");
    }
}
