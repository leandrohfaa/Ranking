<?php

namespace App\Http\Controllers;

use App\Models\clubes;
use Illuminate\Http\Request;

class paginainicialcontroller extends Controller
{
    public function index()
    {   
        $clubes = clubes::get();
        return view("paginainicial.index", compact('clubes'));
    }
}
