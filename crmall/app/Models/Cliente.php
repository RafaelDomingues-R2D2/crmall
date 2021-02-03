<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model{
    protected $fillable = ['nome', 'dataDeNascimento', 'sexo', 'cep', 'endereco',
                           'numero','complemento', 'bairro', 'estado', 'cidade'];
}
