<?php

use Illuminate\Database\Seeder;

class PowerCodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $power = App\PowerCode::class;

        $power::create(['power' => 'on','code' => '20']);
        $power::create(['power' => 'off','code' => '00']);
    }
}
