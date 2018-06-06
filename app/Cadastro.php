<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    protected $fillable = [
        'nome', 'status'
    ];

    public function lista(){
        return Cadastro::all();
    }
}
