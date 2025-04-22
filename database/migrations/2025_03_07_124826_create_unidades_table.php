<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unidade',5);//cm,mm.kg
            $table->string('desrcicao',30);

            $table->timestamps();
        });

        //adicionar o relacionamento com a tabela produtos


       Schema::table('produtos',function(Blueprint $table){
        $table->unsignedBigInteger('unidade_id');
        $table->foreign('unidade_id')->references('id')->on('unidades');
       });
        //adicionar o relacionamento com tabela produtos detalhes
        Schema::table('produtos_detalhes',function(Blueprint $table){
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
           });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
{
    // Remover o relacionamento com a tabela produtos_detalhes
    Schema::table('produtos_detalhes', function (Blueprint $table) {
        // Remove foreign key (nome correto da chave)
        $table->dropForeign(['unidade_id']);

        // Remover a coluna unidade_id
        $table->dropColumn('unidade_id');
    });

    // Remover o relacionamento com a tabela produtos
    Schema::table('produtos', function (Blueprint $table) {
        // Remove foreign key (nome correto da chave)
        $table->dropForeign(['unidade_id']);

        // Remover a coluna unidade_id
        $table->dropColumn('unidade_id');
    });

    // Finalmente, remover a tabela unidades
    Schema::dropIfExists('unidades');
}

}
