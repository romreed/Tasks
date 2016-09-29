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
        DB::table('users')->insert([
            'userName' => str_random(10),
            'nickname' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
        DB::table('taskslist')->insert([
            'userName' => str_random(10),
            'nickname' => str_random(10),
            'task' => str_random(10),
            'email' => str_random(10).'@gmail.com',

        ]);
    }
}
