<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \App\MotivoContato;

class CreateMotivoContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motivo_contatos', function (Blueprint $table) {
            $table->id();
            $table->String('motivo_contatos', 20);
            $table->timestamps();
        });
        /**Posso fazer dessa forma ou usar o seede */
      /*  MotivoContato::create(['Duvida']);
        MotivoContato::create(['Elogio']);
        MotivoContato::create(['Reclamacao']);*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motivo_contatos');
    }
}
