<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFornecedorNovaColunas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //adicionar coluna

        Schema::table('fornecedors', function(Blueprint $table){
            $table->string('uf', 2);
            $table->string('email', 150);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //remover coluna
        Schema::table('fornecedors', function(Blueprint $table){
          $table->dropColumn('uf');
          $table->dropColumn('email');


        }); 

    }
}
