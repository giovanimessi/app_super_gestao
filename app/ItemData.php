<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemData extends Model
{
    //
    protected $table = 'produtos_detalhes';
    protected $fillable = ['produto_id','comprimento','largura','altura','unidade_id'];

    public function item(){
        return $this->belongsTo('App\Item','produto_id','id');
    }
}
