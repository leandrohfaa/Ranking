<?php

namespace App\Http\Controllers;

use App\Models\competicao;
use Illuminate\Http\Request;

class competicaocontroller extends Controller
{
    public function index()
    {
        $competicoes = competicao::orderBy('pontuacao', 'desc')->get(); 
        return view("competicao.indexc", compact("competicoes"));
    }
    public function form()
    {
        return view("competicao.formc");
    }

    public function store(Request $request)
    {   
       
        competicao::create([
            "nome" => $request->competicao,
            "pontuacao" => $request->pontuacao,
        ]);

      
        return redirect()->route('competicao.list');
    }
}
