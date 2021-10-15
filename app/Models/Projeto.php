<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    use HasFactory;
    
    protected $casts = [
        'recursos_necessarios' => 'array',
        'categoria' => 'array'
    ];

    protected $table = 'projetos';
    
    
    protected $fillable = [
        'id',
        'id_user',
        'sigeam',
        'municipio',
        'coordenadoria',
        'escola',
        'telefone',
        'email',
        'projeto',
        'gestor',
        'modelo',
        'solicitante',
        'valor_ini',
        'informante',
        'respon_projeto',
        'respon_pelo_projeto',
        'tipo_projeto',
        'data',
        'descricao',
        'executor',
        'executor_email',
        'executor_telefone',
        'executor_atuacao',
        'data_ini',
        'data_fim',
        'categoria',
        'recursos_necessarios',
        'id_projeto'
    ];

    public function relUsers()
    {
        return $this->hasOne('App\Models\User','id','id_user');
    }

    public function relFases(){
        return $this->hasMany('App\Models\Fase', 'id_projeto');
    }
}
