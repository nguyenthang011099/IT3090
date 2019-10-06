<?php

use Illuminate\Database\Seeder;

class NhacungcapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Nhacungcap::class, 10000)->create();

    }
}
