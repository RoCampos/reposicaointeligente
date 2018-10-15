<?php

use Illuminate\Database\Seeder;

class cronogramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\cronograma::class, 5)
        	->create();
    }
}
