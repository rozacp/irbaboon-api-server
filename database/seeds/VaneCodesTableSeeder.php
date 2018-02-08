<?php

use Illuminate\Database\Seeder;

class VaneCodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vane = App\VaneCode::class;

        $vane::create(['vane' => '1','code' => '1001']);
        $vane::create(['vane' => '2','code' => '1010']);
        $vane::create(['vane' => '3','code' => '1011']);
        $vane::create(['vane' => '4','code' => '1100']);
        $vane::create(['vane' => '5','code' => '1101']);
        $vane::create(['vane' => 'Cycle','code' => '1111']);
        $vane::create(['vane' => 'Auto','code' => '1000']);

    }
}
