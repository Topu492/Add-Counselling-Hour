<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DoctorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('doctors')->insert([
            'id' => '1',
            'user_id' => '2',
            'edu_degree' => 'MBBS',
            'about_me' => \Illuminate\Support\Str::random(50),
            'present_address' => \Illuminate\Support\Str::random(15),
            'bmdc_reg_no' => \Illuminate\Support\Str::random(8),
            'area_name_id' => '1',
            'category_name_id' => '1',
            'created_at' => Carbon::now(),
        ]);
    }
}
