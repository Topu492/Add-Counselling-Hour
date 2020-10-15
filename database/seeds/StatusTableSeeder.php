<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Code Start Here
        DB::table('statuses')->insert([
            'status_name' => 'Pending',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('statuses')->insert([
            'status_name' => 'Approve',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
       ]);
        DB::table('statuses')->insert([
          'status_name' => 'Rejected',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
       ]);
    }
}
