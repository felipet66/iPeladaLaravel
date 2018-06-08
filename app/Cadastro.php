<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    protected $fillable = [
        'nome', 'status', 'created_at', 'updated_at', 'deleted_at', 'mes', 'tipo'
    ];

    public function lista(){
        return Cadastro::all();
    }
}
