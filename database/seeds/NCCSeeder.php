<?php

use Illuminate\Database\Seeder;

class NCCSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\NCC::class, 3)->create();
    }
}
