<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fase extends Model
{


    protected $table = 'fases';
    use HasFactory;

    protected $fillable = [
        'id',
        'id_projeto',
        'fase',
        'atividade'
    ];

    public function relProjeto()
{
    return $this->hasOne('App\Models\Projeto','id','id_projeto');

}
}

