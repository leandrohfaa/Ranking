<?php

namespace App\Http\Controllers;

use App\Models\titulos;
use Illuminate\Http\Request;

class titulocontroller extends Controller
{
    public function index()
    {
        return view("titulo.form");
    }
}
