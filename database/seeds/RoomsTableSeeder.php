<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $room = App\Room::class;

        
        for ($i=1; $i < 18; $i++) {
            
            $room::create([
                'number' => $i, 
                'uuid' => str_random(10),
                'socket_id' => str_random(30)
                ]);
            }
        }
}
