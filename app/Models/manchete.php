<?php // abre a execução da linguagem php

namespace App\Models; // ambiente de trabalho

use Illuminate\Database\Eloquent\Model; //

class manchete extends Model
{
    protected $fillable = [
        'titlo',
        'conteudo',
        'data',
        'datahora'
    ];
}
