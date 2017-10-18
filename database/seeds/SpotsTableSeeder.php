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
            'latitude' => 1.0,
            'longitude' => 1.0,
            'country_id' => 1,
        ]);

        DB::table('spots')->insert([
            'latitude' => 2.0,
            'longitude' => 2.0,
            'country_id' => 2,
        ]);

        DB::table('spots')->insert([
            'latitude' => 3.0,
            'longitude' => 3.0,
            'country_id' => 3,
        ]);

        DB::table('spots')->insert([
            'latitude' => 4.0,
            'longitude' => 4.0,
            'country_id' => 4,
        ]);

        DB::table('spots')->insert([
            'latitude' => 5.0,
            'longitude' => 5.0,
            'country_id' => 1,
        ]);
    }
}
