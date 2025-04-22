<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Fornecedor;

class FornecedorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $for = new Fornecedor();
        $for->nome = 'Fornecedor 100';
        $for->site = 'www.fornecedor100.com';
        $for->uf = 'BA';
        $for->email = 'for@email.com';
        $for->save();

        $for::create([
            'nome'=> 'Fornecedor 200',
            'site'=> 'www.for.com.br',
            'uf'  => 'MG',
            'email'=> 'mg@email.com'
        ]);

        DB::table('fornecedors')->insert([
            'nome'  => 'Fornecedor 300',
            'site'  => 'www.for3.com.br',
            'uf'    => 'sp',
            'email' => 'sp@email.com'
        ]);
        
    }
}
