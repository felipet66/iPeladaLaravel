@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">iPelada</div>

                <div class="card-body">
                <form action="{{ route('salvar') }}" method="post">
                        {{ csrf_field() }}
                        <div class="inner-addon left-addon">
                            <i class="glyphicon glyphicon-user"></i>      
                            <input type="text" class="form-control" placeholder="Digite o nome" name="nome"/>
                        </div><br>
                        <div class="inner-addon left-addon">
                            <i class="glyphicon glyphicon-user"></i>      
                            <input type="text" class="form-control" placeholder="Digite o status" name="status"/>
                        </div><br>
                        <button class="btn btn-default">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
