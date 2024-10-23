<?php

namespace App\Http\Controllers;

use App\Models\clubes;
use App\Models\competicao;
use App\Models\titulos; 
use Illuminate\Http\Request;

class TitulosController extends Controller
{
    public function index()
    {
        $titulos = titulos::all(); 
        return view('titulo.form', compact('titulos'));
    }
    public function form()
    {
    
    $clubes = clubes::all();
    $competicoes = competicao::all();
    
    return view('titulo.form', compact('clubes', 'competicoes'));
    }
    public function store(Request $request)
    {
    // Validação dos dados recebidos
    $validatedData = $request->validate([
        'clube_id' => 'required|exists:clubes,id',       // Verifica se o clube existe
        'competicao_id' => 'required|exists:competicaos,id', // Verifica se a competição existe
        'ano' => 'required|integer|min:1900|max:' . date('Y'), // Ano do título
        'pontuacao' => 'required|integer|min:0',         // Pontuação para a competição
    ]);

    // Criar o título e associá-lo ao clube e à competição
    $titulo = new Titulos(); // Certifique-se de ter importado o modelo
    $titulo->clube_id = $validatedData['clube_id'];
    $titulo->competicao_id = $validatedData['competicao_id'];
    $titulo->ano = $validatedData['ano'];
    $titulo->pontuacao = $validatedData['pontuacao']; // Armazena a pontuação
    $titulo->save();

    // Redirecionar com uma mensagem de sucesso
    return redirect()->route('titulo.form')->with('success', 'Título adicionado com sucesso!');
    }   

}

