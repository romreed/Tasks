<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function time(){
        $date=date('Y-m-d H:i:s');
        return $date;
    }
    public function run()
    {
        DB::table('users')->insert([
            'name' => str_random(10),
            'nickname' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'created_at' => $this->time(),
            'updated_at' => $this->time(),
        ]);

        DB::table('taskslist')->insert([
            'name' => str_random(10),
            'nickname' => str_random(10),
            'task' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'created_at' => $this->time(),
            'updated_at' => $this->time(),
        ]);
    }
}
