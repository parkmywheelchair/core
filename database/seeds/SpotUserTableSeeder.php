<?php

use Illuminate\Database\Seeder;

class SpotUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spot_user')->insert([
            'spot_id' => 1,
            'user_id' => 1,
            'action_id' => 1,
        ]);

        DB::table('spot_user')->insert([
            'spot_id' => 1,
            'user_id' => 2,
            'action_id' => 2,
        ]);

        DB::table('spot_user')->insert([
            'spot_id' => 1,
            'user_id' => 2,
            'action_id' => 3,
        ]);

        DB::table('spot_user')->insert([
            'spot_id' => 2,
            'user_id' => 2,
            'action_id' => 1,
        ]);

        DB::table('spot_user')->insert([
            'spot_id' => 2,
            'user_id' => 1,
            'action_id' => 3,
        ]);

        DB::table('spot_user')->insert([
            'spot_id' => 3,
            'user_id' => 2,
            'action_id' => 1,
        ]);

        DB::table('spot_user')->insert([
            'spot_id' => 4,
            'user_id' => 3,
            'action_id' => 1,
        ]);

        DB::table('spot_user')->insert([
            'spot_id' => 5,
            'user_id' => 1,
            'action_id' => 1,
        ]);
    }
}
