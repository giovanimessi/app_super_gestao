<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    use SoftDeletes;
    protected $table = 'fornecedors';
    protected $fillable = [
        'nome', // Adicione todos os campos que você deseja permitir
        'site',
        'uf',
        'email'
    ];
}
