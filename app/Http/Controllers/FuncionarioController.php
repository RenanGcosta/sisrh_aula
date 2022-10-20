<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{   //pasta da view
    public function index(Request $request)
    {               //variavel funcionario recebe select all da tabela funcionario
        $funcionarios = Funcionario::where('nome', 'like', '%'.$request->buscaFuncionario.'%')->orderby('nome', 'asc') ->get();     

        $totalFuncionarios = Funcionario::all()->count();                  
        return view('funcionarios.index', compact('funcionarios', 'totalFuncionarios'));
    }

    public function departamento($id, Request $request)
    {
        $departamento = Departamento::find($id);

        $funcionarios = Funcionario::where('id_departamento', $id)
        ->where('nome', 'like', '%'.$request->buscaFuncionario.'%')
        ->orderby('nome', 'asc') ->get();     

        $totalFuncionarios = Funcionario::where('id_departamento', $id)->count();                  
        return view('funcionarios.index', compact('funcionarios', 'totalFuncionarios', 'departamento'));
        

    }

    public function create()
    {
        return view('funcionarios.create');
    }
}