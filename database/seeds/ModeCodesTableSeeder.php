<?php

use Illuminate\Database\Seeder;

class ModeCodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mode = App\ModeCode::class;

        // EJ TLE JE EN MODE2

        $mode::create(['mode' => 'cool','code' => '18']);
        $mode::create(['mode' => 'dry','code' => '10']);
        $mode::create(['mode' => 'fan','code' => '38']);
        $mode::create(['mode' => 'heat','code' => '08']);
    }
}
