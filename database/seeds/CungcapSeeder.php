<?php

use Illuminate\Database\Seeder;

class CungcapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Cungcap::class,2)->create();
    }
}
