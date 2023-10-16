<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cadenasController extends Controller
{
    public function index() {
    
        return view('verCadenas');
    }
}
