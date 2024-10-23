<?php

namespace App\Http\Controllers;

use App\Models\clubes;
use Illuminate\Http\Request;

class clubecontroller extends Controller
{
    public function index()
    {
        $clubes = clubes::all();    
        return view("clube.index",compact("clubes"));
    
    }
    public function form()
    {
        return view("clube.form");
    }
    public function store(Request $request)
    {
        $clube = clubes::create([
            "name"=>$request->clube,
        ]);
        return redirect()->route("clube.list");
    }
}

