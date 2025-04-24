<?php

use Illuminate\Database\Seeder;
use \App\MotivoContato;

class MotivoContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       MotivoContato::create(['motivo_contatos' => 'Duvida']);
       MotivoContato::create(['motivo_contatos' => 'Elogio']);
       MotivoContato::create(['motivo_contatos' => 'Reclamacao']);
    }
}
