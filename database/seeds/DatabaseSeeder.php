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
        $this->call('TempCodesTableSeeder');
        $this->call('VaneCodesTableSeeder');

        factory(App\User::class)->create();

        factory(App\Room::class, 17)->create()->each(function($room, $i) {

            $room->number = $i + 1;
            $room->save();

            $room->hvac()->save(factory(App\Hvac::class)->make());
            $room->room_ac()->save(factory(App\RoomAc::class)->make());
        });
    }
}
