<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AlterProdutosRelacionamentoFornecedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Inserir um fornecedor padrão antes de criar a foreign key
        $fornecedor_id = DB::table('fornecedors')->insertGetId([
            'nome'  => 'Fornecedor Padrao 01',
            'site'  => 'www.teste.com.br',
            'uf'    => 'BA',
            'email' => 'forn@gmail.com'
        ]);

        Schema::table('produtos', function (Blueprint $table) use ($fornecedor_id) {
            $table->unsignedBigInteger('fornecedor_id')->default($fornecedor_id)->after('id');
            $table->foreign('fornecedor_id')->references('id')->on('fornecedors');
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        
             Schema::table('produtos', function (Blueprint $table) {
            $table->dropForeign(['fornecedor_id']);
            $table->dropColumn('fornecedor_id');
        });
    }
}
