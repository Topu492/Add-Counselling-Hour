<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('areas')->insert([
            'area_name' => 'Dhanmondi',
        ]);
        DB::table('areas')->insert([
            'area_name' => 'Ashulia',
        ]);
        DB::table('areas')->insert([
            'area_name' => 'Uttara',
        ]);

//        factory(App\User::class, 50)->create()->each(function ($user) {
//            $user->posts()->save(factory(App\Post::class)->make());
//        });
    }
}
