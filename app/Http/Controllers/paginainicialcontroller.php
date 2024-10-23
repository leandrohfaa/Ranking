<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paginainicialcontroller extends Controller
{
    public function index()
    {
        return view("paginainicial.index");
    }
}
