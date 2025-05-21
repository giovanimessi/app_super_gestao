<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoDetalhe extends Model
{
    //

    protected $table = 'produtos_detalhes';
      protected $fillable = [
        'produto_id',
         'comprimento', 
         'largura', 
         'altura',
          'unidade_id'
        ];

        public function produto(){

          //se existe softDelete  usar ->withTrashed
        // return $this->belongsTo('App\Produto')->withTrashed();
         return $this->belongsTo('App\Produto');

        }
}
