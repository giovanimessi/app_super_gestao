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
    // Adiciona a nova coluna
    Schema::table('site_contatos', function (Blueprint $table) {
        if (!Schema::hasColumn('site_contatos', 'motivo_contatos_id')) {
            $table->unsignedBigInteger('motivo_contatos_id')->nullable(); // por segurança
        }
    });

    // Atualiza os dados da nova coluna com os valores antigos
    DB::statement('UPDATE site_contatos SET motivo_contatos_id = motivo_contato');

    // Cria a foreign key e remove a antiga coluna
    Schema::table('site_contatos', function (Blueprint $table) {
        $table->foreign('motivo_contatos_id')->references('id')->on('motivo_contatos');
        $table->dropColumn('motivo_contato');
    });
}

public function down()
{
    Schema::table('site_contatos', function (Blueprint $table) {
        $table->integer('motivo_contato')->nullable();
        $table->dropForeign(['motivo_contatos_id']);
    });

    DB::statement('UPDATE site_contatos SET motivo_contato = motivo_contatos_id');

    Schema::table('site_contatos', function (Blueprint $table) {
        $table->dropColumn('motivo_contatos_id');
    });
}

}
