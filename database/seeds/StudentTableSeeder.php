<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('nurses')->insert([
            'id' => '1',
            'user_id' => '3',
            'about_me' => \Illuminate\Support\Str::random(150),
        ]);
    }
}
