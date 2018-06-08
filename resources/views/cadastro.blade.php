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
                    @include('layouts/template/_includes/form');
                    <button class="btn btn-secondary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
