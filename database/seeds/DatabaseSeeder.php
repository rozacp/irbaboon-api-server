<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('AcModelsTableSeeder');
        $this->call('FanCodesTableSeeder');
        $this->call('ModeCodesTableSeeder');
        $this->call('PowerCodesTableSeeder');
        $this->call('RoomsTableSeeder');
        $this->call('TempCodesTableSeeder');
        $this->call('VaneCodesTableSeeder');
    }
}
