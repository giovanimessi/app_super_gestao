<?php


use \App\SiteContato;
use Illuminate\Database\Seeder;
use Database\Seeders\SiteContatosTableSeeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(FornecedorsSeeder::class);
        $this->call(SiteContatosSeeder::class);
        $this->call(MotivoContatoSeeder::class);
        
    }
}
