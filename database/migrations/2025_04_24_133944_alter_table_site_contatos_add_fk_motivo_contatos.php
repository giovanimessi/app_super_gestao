<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AlterTableSiteContatosAddFkMotivoContatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //adicionando a coluna motivo_contato_id
        Schema::table('site_contatos',function(Blueprint $table){
            $table->unsignedBigInteger('motivo_contatos_id');


        });
        //atribuindo motivo_contato para nova coluna motivo_contato_id

        DB::statement('update site_contatos set motivo_contatos_id = motivo_contato');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
