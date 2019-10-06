<?php

use Illuminate\Database\Seeder;

class MathangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Mathang::class, 9000)->create();
    }
}
