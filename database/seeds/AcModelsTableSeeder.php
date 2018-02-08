<?php

use Illuminate\Database\Seeder;

class AcModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = App\AcModel::class;

        $model::create(['model' => 'mitsubishi']);
    }
}
