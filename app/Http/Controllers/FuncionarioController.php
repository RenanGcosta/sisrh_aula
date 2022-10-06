<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{   //pasta da view
    public function index()
    {  
        $funcionarios = Funcionario::all();                          //variavel funcionario recebe select all da tabela funcionario
        return view('funcionarios.index', compact('funcionarios'));
    }

    public function create()
    {
        return view('funcionarios.create');
    }
}
