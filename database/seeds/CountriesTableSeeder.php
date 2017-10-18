<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            'name' => 'Mexico',
        ]);

        DB::table('countries')->insert([
            'name' => 'Hungary',
        ]);

        DB::table('countries')->insert([
            'name' => 'France',
        ]);

        DB::table('countries')->insert([
            'name' => 'Italy',
        ]);
    }
}
