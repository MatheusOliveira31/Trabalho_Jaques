<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index() {
        $dados = Usuarios::all();
        
        return view('usuarios.index', [
            'usuarios' => $dados,
        ]);
    }

    public function cadastrar() {
        return view('usuarios.cadastrar');
    }

    public function gravar(Request $form) {
        dd($form);
        $dados = $form->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios',
            'nome_usuario' => 'required|string|max:255|unique:usuarios',
            'senha' => 'required|string|min:8',
            'admin' => 'boolean',
        ]);

        Usuarios::create($dados);
        
        return redirect()->route('usuarios');
    }

    public function apagar(Usuarios $usuarios) {
        return view('usuarios.apagar', [
            'usuarios' => $usuarios,
        ]);
    }

    public function deletar(Usuarios $usuarios) {
        $usuarios->delete();
        return redirect()->route('usuarios');
    }
}
