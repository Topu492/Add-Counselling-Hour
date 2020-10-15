<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('categories')->insert([
            'category_name' => 'CSE',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'SWE',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'BBA',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'MCT',
        ]);
    }
}
