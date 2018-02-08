<?php

use Illuminate\Database\Seeder;

class FanCodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fan = App\FanCode::class;

        // ej tle je en FAAAAAAAn2

        $fan::create(['fan' => '1','code' => '001']);
        $fan::create(['fan' => '2','code' => '010']);
        $fan::create(['fan' => '3','code' => '011']);
        $fan::create(['fan' => '4','code' => '100']);
        $fan::create(['fan' => 'Auto','code' => '000']);

    }
}
