<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cadastro;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cadastros = new Cadastro();
        $cadastro = $cadastros->lista();
        return view('home', compact('cadastro'));
    }

    public function salvar(Request $req){
        $dados = $req->all();
        Cadastro::create($dados);
        return redirect()->route('home');
    }

    public function novoCadastro(){
        return view('cadastro');
    }
}
