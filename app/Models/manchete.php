<?php // abre a execução da linguagem php

namespace App\Models; // ambiente de trabalho

use Illuminate\Database\Eloquent\Model; // invocando o componente model

class manchete extends Model // a classe manchete está herdando os metodos da classe model
{
    protected $fillable = [ // inicia uma array do tipo protegido com as colunas da tabela
        'titlo',
        'conteudo',
        'data',
        'datahora'
    ];
}
