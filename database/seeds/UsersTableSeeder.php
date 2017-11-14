<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Juan Pablo Flores Galindo',
            'email' => 'juanfg@outlook.com',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'name' => 'Benjamin Cabassot',
            'email' => 'benjamin@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'name' => 'Davide Q',
            'email' => 'david@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
