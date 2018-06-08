@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><h2>iPelada</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Seja bem vindo ao iPelada querido perna de pal!
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Jogadores</div>

                <div class="card-body">
                <a class="btn btn-secondary" href="/novocadastro">Novo Cadastro</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>Jogadores</h2>
            <div class="card">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Status</th>
                  <th>Data</th>
                  <th>Ação</th>
                </tr>
              </thead>
              <tbody>
                @foreach($cadastro as $usuario)
                <tr>
                  <td>{{ $usuario['nome'] }}</td>
                  <td>{{ $usuario['status'] }}</td>
                  <td>{{ $usuario['created_at']}}</td>
                  <td>
                    <a class="btn btn-primary" href="/editar/{{$usuario['id']}}">
                        <i class="fa fa-edit"></i>
                    </a>
                    
                    <a class="btn btn-danger" href="/deletar/{{$usuario['id']}}">
                      <i class="fa fa-times"></i>
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
@endsection
