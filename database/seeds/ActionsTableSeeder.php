<?php

use Illuminate\Database\Seeder;

class ActionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actions')->insert([
            'name' => 'Add Spot',
            'points_earned' => 3,
        ]);

        DB::table('actions')->insert([
            'name' => 'Like',
            'points_earned' => 1,
        ]);

        DB::table('actions')->insert([
            'name' => 'Dislike',
            'points_earned' => -1,
        ]);
    }
}
