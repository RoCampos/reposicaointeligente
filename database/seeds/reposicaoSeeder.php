<?php

use Illuminate\Database\Seeder;

class reposicaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\reposicao::class, 5)
        	->create();
    }
}
