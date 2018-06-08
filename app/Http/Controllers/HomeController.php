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

    public function editar( $id ){
        $registro = Cadastro::find($id);
        return view('editar', compact('registro'));
    }

    public function atualizar( Request $req, $id ){
        $dados = $req->all();
        Cadastro::find($id) -> update($dados);
        return redirect()->route('home');
    }

    public function deletar( $id ){
        Cadastro::find($id)->delete();
        return redirect()->route('home');
    }
}
