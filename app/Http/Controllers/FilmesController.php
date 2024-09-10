<?php

namespace App\Http\Controllers;

use App\Models\Filmes;
use Illuminate\Http\Request;

class FilmesController extends Controller
{
    public function index() {
        $dados = Filmes::all();
        
        return view('filmes.index', [
            'filmes' => $dados,
        ]);
    }

    public function cadastrar() {
        return view('filmes.cadastrar');
    }

    public function gravar(Request $form) {
        dd($form);
        $dados = $form->validate([
            'nome' => 'required|string|max:255',
            'sinopse' => 'required|string|max:255',
            'ano' => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
            'imagem_da_capa' => 'nullable|string|max:255',
            'link' => 'required|string|max:255',
        ]);

        Filmes::create($dados);
        
        return redirect()->route('filmes');
    }

    public function apagar(Filmes $filmes) {
        return view('filmes.apagar', [
            'filmes' => $filmes,
        ]);
    }

    public function deletar(Filmes $filmes) {
        $filmes->delete();
        return redirect()->route('filmes');
    }
}
