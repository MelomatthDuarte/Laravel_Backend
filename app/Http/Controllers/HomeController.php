<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Acciones
    public function home()
    {
        return view("home");
    }

    public function about()
    {
        return view("about");
    }
}
