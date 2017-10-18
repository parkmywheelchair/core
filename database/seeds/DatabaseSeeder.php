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
        $this->call(UsersTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(SpotsTableSeeder::class);
        $this->call(ActionsTableSeeder::class);
        $this->call(SpotUserTableSeeder::class);
    }
}
