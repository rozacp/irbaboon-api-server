<?php

use Illuminate\Database\Seeder;

class TempCodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $temp = App\TempCode::class;

        $temp::create(['temp' => '16','code' => '00']);
        $temp::create(['temp' => '17','code' => '01']);
        $temp::create(['temp' => '18','code' => '02']);
        $temp::create(['temp' => '19','code' => '03']);
        $temp::create(['temp' => '20','code' => '04']);
        $temp::create(['temp' => '21','code' => '05']);
        $temp::create(['temp' => '22','code' => '06']);
        $temp::create(['temp' => '23','code' => '07']);
        $temp::create(['temp' => '24','code' => '08']);
        $temp::create(['temp' => '25','code' => '09']);
        $temp::create(['temp' => '26','code' => '0A']);
        $temp::create(['temp' => '27','code' => '0B']);
        $temp::create(['temp' => '28','code' => '0C']);
        $temp::create(['temp' => '29','code' => '0D']);
        $temp::create(['temp' => '30','code' => '0E']);
        $temp::create(['temp' => '31','code' => '0F']);
    }
}
