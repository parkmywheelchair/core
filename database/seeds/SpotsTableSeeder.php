<?php

use Illuminate\Database\Seeder;

class SpotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spots')->insert([
            'latitude' => 18.4665,
            'longitude' => -97.4004,
            'country_id' => 1,
        ]);

        DB::table('spots')->insert([
            'latitude' => 47.4813,
            'longitude' => 19.0555,
            'country_id' => 2,
        ]);

        DB::table('spots')->insert([
            'latitude' => 48.8566,
            'longitude' => 2.3522,
            'country_id' => 3,
        ]);

        DB::table('spots')->insert([
            'latitude' => 45.4408,
            'longitude' => 12.3155,
            'country_id' => 4,
        ]);

        DB::table('spots')->insert([
            'latitude' => 19.0183,
            'longitude' => -98.2413,
            'country_id' => 1,
        ]);
    }
}
