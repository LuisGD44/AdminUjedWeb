<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class verSolicitudController extends Controller
{
    public function index() {
    
        return view('verSolicitud');
    }
}
