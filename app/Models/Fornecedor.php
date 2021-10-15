<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = "fornecedores";

    protected $fillable = [
        'id_projeto',
        'nome',
        'tipo_empresa',
        'cpf_cnpj',
        'insc_estadual',
        'responsavel',
        'email',
        'cargo',
        'telefone',
        'banco',
        'agencia',
        'conta',
        'digito'
    ];
    use HasFactory;
}
